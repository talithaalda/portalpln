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
    return view('beranda',[
        "active"=>'beranda',
        "title"=>'Beranda'
    ]);
});
Route::get('/aplikasi', function () {
    return view('aplikasi',[
        "active"=>'aplikasi',
        "title"=>'Aplikasi'

    ]);
});
Route::get('/publikasi', function () {
    return view('publikasi',[
        "active"=>'publikasi',
        "title"=>'Publikasi'

    ]);
});
Route::get('/detail-publikasi', function () {
    return view('detail-publikasi',[
        "active"=>'publikasi',
        "title"=>'Detail Publikasi'

    ]);
});
Route::get('/pesanbod', function () {
    return view('pesanbod',[
        "active"=>'pesanbod',
        "title"=>'Pesan BOD'

    ]);
});
Route::get('/login', function () {
    return view('login',[
        "title"=>'Login'
    ]);
});
Route::get('/pesanbod/detailpesan', function () {
    return view('detail-pesan',[
        "title"=>'Detail Pesan BOD',
        "active"=>'pesanbod',
    ]);
});


