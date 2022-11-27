<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acara;
use App\Models\Tamu;
use App\Models\Undangan;

class TamuController extends Controller
{
    public function index($id){
        $datas = Undangan::find($id);
        $data = Tamu::join('undangans', 'undangans.id', '=', 'tamus.id_undangan')
        ->where('tamus.id_undangan', '=', $id)
        ->get(['tamus.id', 'tamus.id_undangan', 'tamus.nama', 'tamus.email', 'undangans.judul_acara', 'tamus.url_undangan']);
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
            'url_presensi' => 'required',
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
            'url_presensi' => $request->url_presensi,
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
    

    public function lihat($id, $id_tamu){
        $undangan = Undangan::find($id);
        $tamu = Tamu::find($id_tamu);
        // dd($id_tamu);
        return view('user/undangan/tamu/undangan', compact('tamu', 'undangan'));

    }
}
