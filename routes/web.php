<?php

use App\Http\Controllers\AcaraController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\UndanganController;
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
Route::controller(RegisterController::class)->group(function(){
    Route::get('register', 'index')->name('register');
    Route::post('register/store', 'store')->name('registerStore');
});
// Route::resource('register', RegisterController::class);
// Route::post('user-create', [UserController::class, 'store'])->name('register');
Route::group(['middleware' => ['auth']], function() {
    Route::group(['middleware' => ['cekLogin:admin']], function(){
        Route::get('dashboardadmin', function(){
            return view('admin.dashboard');
        });
        Route::resource('tema', TemaController::class);
        Route::resource('user', UserController::class);
    });
    Route::group(['middleware' => ['cekLogin:user']], function(){
        Route::get('dashboarduser', function(){
            return view('user.index')->with([
                'user' => Auth::user(),
            ]);
        });
        Route::controller(UndanganController::class)->group(function(){
            Route::get('data_undangan', 'index')->name('data_undangan');
            Route::get('tambah_undangan', 'create')->name('tambah_undangan');
            Route::post('simpan_undangan', 'store')->name('simpan_undangan');
            Route::get('editUndangan/{id}', 'edit')->name('edit_undangan');
            Route::put('update_undangan/{id}', 'update')->name('update_undangan');
            Route::delete('hapus_undangan/{id}', 'hapus')->name('hapus_undangan');
        });
        Route::controller(AcaraController::class)->group(function(){
            Route::get('susunan_acara/{id}', 'index')->name('susunan_acara');
            Route::get('susunan_acara/{id}/create', 'create')->name('tambah_acara');
            Route::post('susunan_acara/{id}/simpan', 'simpan')->name('simpan_acara');
            Route::get('susunan_acara/{id}/{id_user}', 'edit')->name('edit_acara');
            Route::put('susunan_acara/{id}/{id_user}/simpan', 'update')->name('update_acara');
            Route::delete('susunan_acara/{id}/{id_user}/hapus', 'hapus')->name('hapus_acara');
        });
    });
});

Route::get('/', function () {
    return view('user/index');
});

Route::get('/tema1', function () {
    return view('user/tema/undanganTema1');
});
Route::get('/tema2', function () {
    return view('user/tema/undanganTema2');
});
Route::get('/tema3', function () {
    return view('user/tema/undanganTema3');
});
Route::get('/register2', function () {
    return view('register2');
});
Route::get('/login2', function () {
    return view('login2');
});
Route::get('/data-user', function () {
    return view('user.dataUser.dataUser');
});
Route::get('/data-undangan', function () {
    return view('user.dataUser.dataUndangan');
});
Route::get('/tambah-undangan', function () {
    return view('user.dataUser.tambahUndangan');
});
