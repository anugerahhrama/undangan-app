<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $datas = User::all()->where('role' , '=',  'admin');
        return view('admin.admin.dataAdmin', compact('datas'))->with([
            'user' => Auth::user(),
        ]);
    }
}
