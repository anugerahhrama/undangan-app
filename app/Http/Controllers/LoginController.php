<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        if($user = Auth::user()){
            if($user->role == 'admin'){
                return redirect()->intended('dashboardadmin');
            }else if($user->role == 'user'){
                return redirect()->intended('dashboarduser');
            }
        }

        return view('auth/login');
    }

    public function proses(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credential = $request->only('email', 'password');

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            $user = Auth::user();
            if($user->role == 'admin'){
                return redirect()->intended('dashboardadmin');
            }else if($user->role == 'user'){
                return redirect()->intended('dashboarduser');
            }

            return redirect()->intended('login'); 
        }

        return back()->withErrors([
            'email' => 'Maaf email atau password anda salah',
        ])->onlyInput('email');

    }

    public function logout(Request $request)
        {
            Auth::logout();
        
            $request->session()->invalidate();
        
            $request->session()->regenerateToken();
        
            return redirect('login');
        }
}
