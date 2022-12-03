<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'nama' => 'required',
            'email' => 'required | unique:users,email',
            'password' => 'required',
            'konfirmasi' => 'required | same:password',
            'alamat' => 'required',
            'no_hp' => 'required',
            'role' => 'required'
        ]);

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'role' => $request->role
        ]);

        if ($request->duplicate){
            return redirect('register')->with('alert1', 'error');
        }

        return redirect('login')->with('alert1', 'Berhasil Mendaftar');
    }

}
