<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\UserController;
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
        Route::resource('user', UserController::class);
    });
    Route::group(['middleware' => ['cekLogin:user']], function(){
        Route::get('dashboarduser', function(){
            return view('user.index');
        });
    });
});

Route::get('/', function () {
    return view('userPage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/admin', function () {
    return view('admin/dashboard');
});

Route::get('/data-user', function () {
    return view('admin/dataUser');
});

Route::get('/data-admin', function () {
    return view('admin/dataAdmin');
});

Route::get('/tambah-user', function () {
    return view('admin/formUser');
});

Route::get('/tambah-admin', function () {
    return view('admin/formAdmin');
});

Route::get('/edit-user', function () {
    return view('admin/editUser');
});

Route::get('/edit-admin', function () {
    return view('admin/editAdmin');
});
