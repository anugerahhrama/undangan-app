<?php

use Illuminate\Support\Facades\Route;

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