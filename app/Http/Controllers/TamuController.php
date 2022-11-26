<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acara;
use App\Models\Undangan;

class TamuController extends Controller
{
    public function tamu($id, $id_user){
        $datas = Acara::find($id_user);
        $data = Undangan::find($id);
        return view('user/undangan/acara/lihat', compact('datas', 'id', 'data'));
    }
}
