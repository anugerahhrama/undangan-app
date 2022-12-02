<?php

namespace App\Http\Controllers;

use App\Mail\MailSend;
use Illuminate\Http\Request;
use App\Models\Acara;
use App\Models\Tamu;
use App\Models\Undangan;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Constraint\Count;

class TamuController extends Controller
{
    public function index($id){
        $datas = Undangan::find($id);
        $data = Tamu::join('undangans', 'undangans.id', '=', 'tamus.id_undangan')
        ->where('tamus.id_undangan', '=', $id)
        ->get(['tamus.id', 'tamus.id_undangan', 'tamus.status_undangan', 'tamus.status_presensi' , 'tamus.nama', 'tamus.email', 'undangans.judul_acara', 'tamus.url_undangan']);
        
        return view('user/undangan/tamu/index', compact('datas', 'data'));
        // dd($data);
    }

    public function create($id){
        $datas = Undangan::find($id);
        $kode = Tamu::kode();
        return view('user/undangan/tamu/tambah', compact('datas', 'kode'));
    }

    public function simpan($id, Request $request, Tamu $tamu){

        $this->validate($request,[
            'id' => 'required',
            'id_undangan' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'status_undangan' => 'required',
            'status_presensi' => 'required'
        ]);
        

        $tamu = Tamu::create([
            'id' => $request->id,
            'id_undangan' => $request->id_undangan,
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'url_undangan' => '127.0.0.1:8000/tamu/'.$request->id_undangan.'/'.$request->id,
            'url_presensi' => 'presensi/'.$request->id_undangan.'/'.$request->id,
            'status_undangan' => $request->status_undangan,
            'status_presensi' => $request->status_presensi
        ]);
        // dd($request);
        return redirect(route('tamu_undangan', $id));
    }


    public function edit($id, $id_tamu){
        $tamu = Tamu::find($id_tamu);
        $undangan = Undangan::find($id);
        return view('user/undangan/tamu/edit', compact('tamu', 'undangan'));
    }

    public function update($id, $id_tamu, Request $request){
        $tamu = Tamu::find($id_tamu);
        $this->validate($request,[
            'id' => 'required',
            'id_undangan' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'status_undangan' => 'required',
            'status_presensi' => 'required'
        ]);
        

        $tamu->update([
            'id' => $request->id,
            'id_undangan' => $request->id_undangan,
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'url_undangan' => '127.0.0.1:8000/tamu/'.$request->id_undangan.'/'.$request->id,
            'url_presensi' => 'presensi/'.$request->id_undangan.'/'.$request->id,
            'status_undangan' => $request->status_undangan,
            'status_presensi' => $request->status_presensi
        ]);

        return redirect(route('tamu_undangan', $id));
    }

    public function delete($id, $id_tamu){
        $tamu = Tamu::find($id_tamu);
        $tamu->delete();
        return redirect(route('tamu_undangan', $id));
    }
    

    public function lihat($id, $id_tamu){
        $undangan = Undangan::find($id);
        $tamu = Tamu::find($id_tamu);
        $acara = Acara::all()->where('id_detail','=',$id);
        $qrcode = QrCode::size(200)->generate($tamu->url_presensi);
        // dd($tamu);
        // return view('user/undangan/tamu/undangan', compact('tamu', 'undangan'));
        return view('user/undangan/tamu/undanganTamu/'.$undangan->id_tema , compact('tamu', 'undangan','acara', 'qrcode'));
    }

    public function presensi($id, $id_tamu){
        $undangan = Undangan::find($id);
        $tamu = Tamu::find($id_tamu);
        // dd($id_tamu);
        return view('user/undangan/tamu/presensi', compact('tamu', 'undangan'));
    }

    public function hadir($id, $id_tamu){
        $tamu = Tamu::find($id_tamu);
        $tamu->update([
            'status_presensi' => 'hadir'
        ]);

        return redirect(route('tamu_undangan', $id));
    }

    public function kirim($id, $id_tamu){
        $tamu = Tamu::find($id_tamu);
        $undangan = Undangan::find($id);
        $qrcode = $tamu->url_undangan;
        $data = [
            'nama' => $tamu->nama,
            'judul' => $undangan->judul_acara,
            'salam' => 'assalamualaikum wr.wb'
        ];
        Mail::to($tamu->email)->send(new MailSend($data, $qrcode));
        $tamu->update([
            'status_undangan' => 'terkirim'
        ]);
        return redirect(route('tamu_undangan', $id));
    }

    // public function cari($id, Request $request){
    //     $tamu = Tamu::where('nama', 'like', '%'.$request->cari.'%')
    //     ->where('id_undangan', '=', $id)
    //     ->get('tamus.*');
    //     $tamus = Tamu::all()->where('id_undangan', '=', $id);
    //     $result = count($tamu);
    //     if($result == 0){
    //         dd($tamus);
    //         // return $tamus;
    //     }else if($request == null){
    //         dd($tamus);
    //     }else{
    //         dd($tamu);
    //         // return $tamu;
    //     }
    // }
}
