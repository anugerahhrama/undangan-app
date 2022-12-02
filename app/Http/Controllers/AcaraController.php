<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use Illuminate\Http\Request;
use App\Models\Undangan;
use Illuminate\Support\Facades\Auth;

class AcaraController extends Controller
{
    public function index($id)
    {
        $datas = Undangan::find($id);
        $dataAcara = Undangan::join('acaras', 'acaras.id_detail', '=', 'undangans.id')
        ->where('acaras.id_detail', '=', $id)
        ->get([ 'acaras.id', 'acaras.acara']);
        return view('user/undangan/acara/index', compact('datas', 'dataAcara'))->with(['user' => Auth::user(),]);
        // dd($dataAcara);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id){
        $datas = Undangan::find($id);
        return view('user/undangan/acara/tambahAcara', compact('datas'))->with(['user' => Auth::user(),]);
    }

    public function simpan($id, Request $request){
        // dd($id);
        $datas = Undangan::find($id);
        $this->validate($request,[
            'id_detail' => 'required',
            'acara' => 'required'
        ]);

        $data = Acara::create([
            'id_detail' => $id,
            'acara' => $request->acara
        ]);
        
        return redirect(route('susunan_acara', $id));
    }

    public function edit($id, $id_user){
        $datas = Acara::find($id_user);
        $data = Undangan::find($id);
        return view('user/undangan/acara/edit', compact('datas', 'id', 'data'));
        return redirect(route('susunan_acara', $id));
    }

    public function update($id, $id_user, Request $request){
        $this->validate($request,[
            // 'id_detail' => 'required',
            'acara' => 'required'
        ]);

        $acara = Acara::findOrFail($id_user);

        $cek = $acara->update([
            // 'id_detail' => $request->id_detail,
            'acara' => $request->acara
        ]);

            
        return redirect(route('susunan_acara', $id));
        // dd($cek);
    }

    public function hapus($id, $id_user){
        $acara = Acara::findOrFail($id_user);
        // dd($acara);
        $acara->delete();
        return redirect(route('susunan_acara', $id));
    }

}


    