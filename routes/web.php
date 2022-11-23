<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TemaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('login', [LoginController::class, 'index'])->name('login'); 

Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses')->name('proses');
    Route::get('logout', 'logout');
});


Route::group(['middleware' => ['auth']], function() {
    Route::group(['middleware' => ['cekLogin:admin']], function(){
        Route::get('dashboardadmin', function(){
            return view('admin.index');
        });
        Route::resource('tema', TemaController::class);
    });
    Route::group(['middleware' => ['cekLogin:user']], function(){
        Route::get('dashboarduser', function(){
            return view('user.index');
        });
    });
});
