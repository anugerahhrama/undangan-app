<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index($id){
        return view('user/tema/undanganTema'.$id);
    }
}
