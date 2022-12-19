<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Faker\Core\Number;

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

        return view('login');
    }

    public function proses(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $data = user::where('email', $email)->first();
        if($email){
            if ($data) { //apakah email tersebut ada atau tidak
                if (Hash::check($password, $data->password)) {
                    Session::put('name', $data->name);
                    Session::put('email', $data->email);
                    Session::put('login', TRUE);
                    // return redirect('home_user');
                    $credential = $request->only('email', 'password');
                    if(Auth::attempt($credential)){
                        $request->session()->regenerate();
                        $user = Auth::user();
                        if($user->role == 'admin'){
                            return redirect()->intended('dashboardadmin')->with('alert', 'Login Berhasil !')->with([
                                'user' => Auth::user()
                            ]);
                        }else if($user->role == 'user'){
                            return redirect()->intended('dashboarduser')->with('alert', 'Login Berhasil !')->with([
                            'user' => Auth::user()]);
                        }
                        return redirect()->intended('login'); 
                    }
                } else {
                    return redirect('login')->with('alert', 'Password, Salah !');
                }
            } else {
                return redirect('login')->with('alert', 'Email Tidak Ditemukan');
            }
        } else {
        return redirect('login')->with('alert', 'Mohon Isi Tabel');
        }
    }

    public function logout(Request $request)
        {
            Auth::logout();
        
            $request->session()->invalidate();
        
            $request->session()->regenerateToken();
        
            return redirect('/')->with('alert1', 'Logout Berhasil!');
        }
}
