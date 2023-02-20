<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;

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


Route::get('/', [apiController::class,'beranda']);

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
Route::get('/artikel', function () {
    return view('artikel',[
        "active"=>'artikel',
        "title"=>'Artikel'

    ]);
});
Route::get('/pengumuman', function () {
    return view('pengumuman',[
        "active"=>'pengumuman',
        "title"=>'Pengumuman'

    ]);
});
Route::get('/kotakide-calendar', function () {
    return view('kotakide.kotakide-calendar',[
        "active"=>'kotakide',
        "title"=>'Kotak Ide',
        "menu"=>'calendar'
    ]);
});
Route::get('/kotakide-star', function () {
    return view('kotakide.kotakide-star',[
        "active"=>'kotakide',
        "title"=>'Kotak Ide',
        "menu"=>'star'
    ]);
});
Route::get('/kotakide-person', function () {
    return view('kotakide.kotakide-person',[
        "active"=>'kotakide',
        "title"=>'Kotak Ide',
        "menu"=>'person'
    ]);
});
Route::get('/kotakide-planet', function () {
    return view('kotakide.kotakide-planet',[
        "active"=>'kotakide',
        "title"=>'Kotak Ide',
        "menu"=>'planet'
    ]);
});
Route::get('/kotakide-money', function () {
    return view('kotakide.kotakide-money',[
        "active"=>'kotakide',
        "title"=>'Kotak Ide',
        "menu"=>'money'
    ]);
});
Route::get('publikasi/detailpublikasi', function () {
    return view('detailpublikasi',[
        "active"=>'publikasi',
        "title"=>'Detail Publikasi'
    ]);
});
Route::get('artikel/detailartikel', function () {
    return view('detailartikel',[
        "active"=>'artikel',
        "title"=>'Detail Artikel'

    ]);
});
Route::get('pengumuman/detailpengumuman', function () {
    return view('detailpengumuman',[
        "active"=>'pengumuman',
        "title"=>'Detail Pengumuman'

    ]);
});
Route::get('kotakide/detailkotakide', function () {
    return view('kotakide.detailkotakide',[
        "active"=>'kotakide',
        "title"=>'Detail Kotak Ide',


    ]);
});
// Route::get('/pesanbod', function () {
//     return view('pesanbod',[
//         "active"=>'pesanbod',
//         "title"=>'Pesan BOD'

//     ]);
// });
Route::get('/pesanbod', [apiController::class,'pesanbod']);
Route::get('/pesanbod/{message:id}',[apiController::class,'showpesanbod']);

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
Route::get('/api', function () {
    return view('test-api',[
        "title"=>'news'
    ]);
});


