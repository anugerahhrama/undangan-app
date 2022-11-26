<?php

namespace App\Http\Controllers;

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
        ->where('undangans.id_user', '=', $user)
        ->get(['undangans.id_user', 'undangans.tanggal', 'undangans.hari', 'undangans.bulan', 'undangans.tahun','undangans.deskripsi',
        'undangans.id', 'users.nama', 'undangans.judul_acara', 'kategoris.kategori']);
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
            'bulan' => 'required',
            'tahun' => 'required',
            'judul_acara' => 'required',
            'id_tema' => 'required',
            'deskripsi' => 'required',
            'id_kategori' => 'required'
        ]);

        $data = Undangan::create([
            'id_user' => $request->id_user,
            'hari' => $request->hari,
            'tanggal' => $request->tanggal,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
            'judul_acara' => $request->judul_acara,
            'id_tema' => $request->id_tema,
            'deskripsi' => $request->deskripsi,
            'id_kategori' => $request->id_kategori
        ]);
        return redirect(route('data_undangan'));
    }

    public function edit($id){
        $datas = Undangan::find($id);
        $temas = Tema::all();
        $kategoris = Kategori::all();
        return view('user/undangan/editUndangan', compact('datas', 'kategoris', 'temas'))->with(['user' => Auth::user(),]);
    }

    public function update(Request $request, $id){
        
        $this->validate($request,[
            'id_user' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',
            'bulan' => 'required',
            'tahun' => 'required',
            'judul_acara' => 'required',
            'id_tema' => 'required',
            'id_kategori' => 'required',
            'deskripsi' => 'required'
        ]);
        $undangan = Undangan::findOrFail($id);
         $datas = $undangan->update([
            'id_user' => $request->id_user,
            'hari' => $request->hari,
            'tanggal' => $request->tanggal,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
            'judul_acara' => $request->judul_acara,
            'id_tema' => $request->id_tema,
            'id_kategori' => $request->id_kategori,
            'deskripsi' => $request->deskripsi
        ]);
        // dd($datas);

        return redirect(route('data_undangan'));

    }

    public function hapus($id){
        $undangan = Undangan::findOrFail($id);
        $undangan->delete();
        return redirect(route('data_undangan'));
    }

}
