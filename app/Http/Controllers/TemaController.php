<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Tema::all();
        return view('admin.tema.dataTema', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tema.tambahTema');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_tema' => 'required',
            'tema' => 'required'
        ]);

        $data = Tema::create([
            'nama_tema' => $request->nama_tema,
            'tema' => $request->tema
        ]);

        return redirect(route('tema.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function show(Tema $tema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function edit(Tema $tema)
    {
        return view('admin.tema.editTema', compact('tema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tema $tema)
    {
        $this->validate($request, [
            'nama_tema' => 'required',
            'tema' => 'required'
        ]);

        $tema->update([
            'nama_tema' => $request->nama_tema,
            'tema' => $request->tema
        ]);

        return redirect(route('tema.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tema $tema)
    {
        $tema->delete();
        return redirect(route('tema.index'));
    }
}
