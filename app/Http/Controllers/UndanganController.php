<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Tema;
use App\Models\User;
use App\Models\Undangan;
use Illuminate\Support\Facades\Auth;

class UndanganController extends Controller
{
    public function index(){
        $user = Auth::user()->id;
        $datas = Undangan::join('users', 'undangans.id_user', '=', 'users.id')
        ->join('kategoris', 'undangans.id_kategori', '=', 'kategoris.id')
        ->join('temas', 'undangans.id_tema' , '=', 'temas.id')
        ->where('undangans.id_user', '=', $user)
        ->get(['undangans.id_user', 'undangans.tanggal', 'undangans.hari', 'undangans.deskripsi',
        'undangans.id', 'users.nama', 'undangans.judul_acara', 'kategoris.kategori', 
        'temas.nama_tema', 'temas.tema', 'undangans.id_tema', 'undangans.jam', 'undangans.lokasi']);
        
        // dd($datas);
        return view('user/undangan/index', compact('datas'));
    }

    
    public function create(){
        $temas = Tema::all();
        $kategoris = Kategori::all();
        return view('user/undangan/create', compact('temas', 'kategoris'))->with(['user' => Auth::user(),]);
    }

    public function store(Request $request){
        // dd($request);
        $this->validate($request,[
            'id_user' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',
            'judul_acara' => 'required',
            'id_tema' => 'required',
            'deskripsi' => 'required',
            'id_kategori' => 'required',
            'jam' => 'required',
            'lokasi' => 'required'
        ]);

        $data = Undangan::create([
            'id_user' => $request->id_user,
            'hari' => $request->hari,
            'tanggal' => $request->tanggal,
            'judul_acara' => $request->judul_acara,
            'id_tema' => $request->id_tema,
            'deskripsi' => $request->deskripsi,
            'id_kategori' => $request->id_kategori,
            'jam' => $request->jam,
            'lokasi' => $request->lokasi
        ]);
        // dd($request);
        return redirect(route('data_undangan'));
    }

    public function edit($id){
        $datas = Undangan::find($id);
        $temas = Tema::all();
        // $tema = Tema::join('undangans', 'undangans.id_tema', '=', 'temas.id')
        // ->where('temas.id', '=', $id)
        // ->get(['temas.id', 'undangans.id_tema','temas.nama_tema']);
        $kategoris = Kategori::all();
        $kategori_undangan = Kategori::find($datas->id_kategori);
        return view('user/undangan/editUndangan', compact('datas', 'kategoris', 'temas', 'kategori_undangan'))->with(['user' => Auth::user(),]);
        // dd($kategoris);
    }   

    public function update(Request $request, $id){
        
        $this->validate($request,[
            'id_user' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',
            'judul_acara' => 'required',
            'id_tema' => 'required',
            'id_kategori' => 'required',
            'deskripsi' => 'required',
            'jam' => 'required',
            'lokasi' => 'required'
        ]);
        $undangan = Undangan::findOrFail($id);
         $datas = $undangan->update([
            'id_user' => $request->id_user,
            'hari' => $request->hari,
            'tanggal' => $request->tanggal,
            'judul_acara' => $request->judul_acara,
            'id_tema' => $request->id_tema,
            'id_kategori' => $request->id_kategori,
            'deskripsi' => $request->deskripsi,
            'jam' => $request->jam,
            'lokasi' => $request->lokasi
        ]);
        // dd($datas);

        return redirect(route('data_undangan'));

    }

    public function hapus($id){
        $undangan = Undangan::findOrFail($id);
        $undangan->delete();
        return redirect(route('data_undangan'));
    }

    public function tema($id, $id_tema){
        $tema = Tema::find($id_tema);
        $data = Undangan::find($id);
        // $url = 'user/undangan/tema/'.$tema->id;
        // dd($url);
        $acara = Acara::join('undangans', 'undangans.id', '=', 'acaras.id_detail')
        ->where('acaras.id_detail', '=', $id)
        ->get(['acaras.acara']);
        return view('user/undangan/tema/'.$tema->id, compact('data', 'acara'));
        // dd($user);
    }
}
