<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\functionController;
use Illuminate\Pagination\Paginator;

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


Route::get('/', function(){
    $messages = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/news/get_messages_bod?skey=FULLPOWERRR'), true);
    $publikasi = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/magazine/get_list?skey=FULLPOWERRR'), true);
    $artikel = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/article/get_list_by_category?skey=FULLPOWERRR'), true);
    $pengumuman = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/news/get_announcements?skey=FULLPOWERRR'), true);
    $kotakide = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/idea_box/get_list_newest?skey=FULLPOWERRR'), true);
        return view('beranda',[
            "active"=>'beranda',
            "title"=>'Beranda',
            "pesanbod"=> $messages['data'],
            "pengumuman"=>$pengumuman['data'],
            "artikel"=>$artikel['data'],
            "kotakide"=>$kotakide['data'],
            "publikasi"=>$publikasi['data']
        ]);
});

Route::get('/aplikasi', function () {
    return view('aplikasi',[
        "active"=>'aplikasi',
        "title"=>'Aplikasi'

    ]);
});
Route::get('/kontak', function () {
    return view('kontak',[
        "active"=>'kontak',
        "title"=>'Kontak'

    ]);
});
Route::get('/kontak/1', function () {
    return view('detail-kontak',[
        "active"=>'kontak',
        "title"=>'Kontak'

    ]);
});
Route::get('/publikasi', function () {
    $publikasi = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/magazine/get_list?skey=FULLPOWERRR'), true);
    $paginate = functionController::paginate($publikasi['data']);
    $paginate->withPath('/publikasi');
    return view('publikasi',[
        "active"=>'publikasi',
        "title"=>'Publikasi',
        "publikasi"=> $paginate,
        "allpub"=>$publikasi['data']

    ]);
});
Route::get('/artikel', function () {
    $artikel = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/article/get_list_by_category?skey=FULLPOWERRR'), true);
    $paginate = functionController::paginate($artikel['data']);
    $paginate->withPath('/artikel');
    return view('artikel',[
        "active"=>'artikel',
        "title"=>'Artikel',
        "artikel"=>$paginate,
        "allartikel"=>$artikel['data']
    ]);
});
Route::get('/pengumuman', function () {
    $pengumuman = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/news/get_announcements?skey=FULLPOWERRR'), true);
    $paginate = functionController::paginate($pengumuman['data']);
    $paginate->withPath('/pengumuman');
    return view('pengumuman',[
        "active"=>'pengumuman',
        "title"=>'Pengumuman',
        "pengumuman"=>$paginate,
        "allnews"=>$pengumuman['data']
    ]);
});
Route::get('/kotakide-latest', function () {
    $kotakide = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/idea_box/get_list_newest?skey=FULLPOWERRR'), true);
    $rating = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/idea_box/get_list_top_rated?skey=FULLPOWERRR'), true);
    $paginate = functionController::paginate($kotakide['data']);
    $paginate->withPath('/kotakide-latest');
    return view('kotakide.kotakide-latest',[
        "active"=>'kotakide',
        "title"=>'Kotak Ide',
        "menu"=>'latest',
        "kotakide"=>$paginate,
        "allide"=>$kotakide['data'],
        "rating"=>$rating['data']
    ]);
});
Route::get('/kotakide-rating', function () {
    $kotakide = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/idea_box/get_list_top_rated?skey=FULLPOWERRR'), true);
    $paginate = functionController::paginate($kotakide['data']);
    $paginate->withPath('/kotakide-rating');
    return view('kotakide.kotakide-rating',[
        "active"=>'kotakide',
        "title"=>'Kotak Ide',
        "menu"=>'rating',
        "kotakide"=>$paginate,
        "rating"=>$kotakide['data'],
        "allide"=>$kotakide['data']
    ]);
});
Route::get('/kotakide-people', function () {
    $kotakide = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/idea_box/get_list_people?skey=FULLPOWERRR'), true);
    $rating = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/idea_box/get_list_top_rated?skey=FULLPOWERRR'), true);
    $paginate = functionController::paginate($kotakide['data']);
    $paginate->withPath('/kotakide-people');
    return view('kotakide.kotakide-people',[
        "active"=>'kotakide',
        "title"=>'Kotak Ide',
        "menu"=>'people',
        "kotakide"=>$paginate,
        "allide"=>$kotakide['data'],
        "rating"=>$rating['data']
    ]);
});
Route::get('/kotakide-planet', function () {
    $kotakide = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/idea_box/get_list_planet?skey=FULLPOWERRR'), true);
    $rating = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/idea_box/get_list_top_rated?skey=FULLPOWERRR'), true);
    $paginate = functionController::paginate($kotakide['data']);
    $paginate->withPath('/kotakide-planet');
    return view('kotakide.kotakide-planet',[
        "active"=>'kotakide',
        "title"=>'Kotak Ide',
        "menu"=>'planet',
        "kotakide"=>$paginate,
        "allide"=>$kotakide['data'],
        "rating"=>$rating['data']
    ]);
});
Route::get('/kotakide-profit', function () {
    $kotakide = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/idea_box/get_list_profit?skey=FULLPOWERRR'), true);
    $rating = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/idea_box/get_list_top_rated?skey=FULLPOWERRR'), true);
    $paginate = functionController::paginate($kotakide['data']);
    $paginate->withPath('/kotakide-profit');
    return view('kotakide.kotakide-profit',[
        "active"=>'kotakide',
        "title"=>'Kotak Ide',
        "menu"=>'profit',
        "kotakide"=>$paginate,
        "allide"=>$kotakide['data'],
        "rating"=>$rating['data']
    ]);
});
Route::get('publikasi/{publikasi:id}', function ($idpublikasi) {
    $publikasi = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/magazine/get_list?skey=FULLPOWERRR'), true);
    return view('detailpublikasi',[
        "active"=>'publikasi',
        "title"=>"Publikasi | {$publikasi['data'][$idpublikasi]['MGJUDUL']}",
        "publikasi"=>$publikasi['data'][$idpublikasi],
        "allpub"=>$publikasi
    ]);
});
Route::get('artikel/{artikel:id}', function ($idartikel) {
    $artikel = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/article/get_list_by_category?skey=FULLPOWERRR'), true);
    return view('detailartikel',[
        "active"=>'artikel',
        "title"=>"Artikel | {$artikel['data'][$idartikel]['ARJUDUL']}",
        "artikel"=>$artikel['data'][$idartikel],
        "allartikel"=>$artikel

    ]);
});
Route::get('pengumuman/{pengumuman:id}', function ($idpengumuman) {
    $pengumuman = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/news/get_announcements?skey=FULLPOWERRR'), true);
    return view('detailpengumuman',[
        "active"=>'pengumuman',
        "title"=>"Pengumuman | {$pengumuman['data'][$idpengumuman]['NFJUDUL']}",
        "pengumuman"=>$pengumuman['data'][$idpengumuman],
        "allnews"=>$pengumuman
    ]);
});
Route::get('kotakide-latest/{kotakide:id}', function ($idkotakide) {
    $kotakide = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/idea_box/get_list_newest?skey=FULLPOWERRR'), true);
    return view('kotakide.detailkotakide',[
        "active"=>'kotakide',
        "title"=>"Detail Kotak Ide | {$kotakide['data'][$idkotakide]['IBJUDUL']}",
        "kotakide"=>$kotakide['data'][$idkotakide],
        "allide"=>$kotakide
    ]);
});
Route::get('kotakide-rating/{kotakide:id}', function ($idkotakide) {
    $kotakide = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/idea_box/get_list_top_rated?skey=FULLPOWERRR'), true);
    return view('kotakide.detailkotakide',[
        "active"=>'kotakide',
        "title"=>"Detail Kotak Ide | {$kotakide['data'][$idkotakide]['IBJUDUL']}",
        "kotakide"=>$kotakide['data'][$idkotakide],
        "allide"=>$kotakide
    ]);
});
Route::get('kotakide-people/{kotakide:id}', function ($idkotakide) {
    $kotakide = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/idea_box/get_list_people?skey=FULLPOWERRR'), true);
    return view('kotakide.detailkotakide',[
        "active"=>'kotakide',
        "title"=>"Detail Kotak Ide | {$kotakide['data'][$idkotakide]['IBJUDUL']}",
        "kotakide"=>$kotakide['data'][$idkotakide],
        "allide"=>$kotakide
    ]);
});
Route::get('kotakide-planet/{kotakide:id}', function ($idkotakide) {
    $kotakide = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/idea_box/get_list_planet?skey=FULLPOWERRR'), true);
    return view('kotakide.detailkotakide',[
        "active"=>'kotakide',
        "title"=>"Detail Kotak Ide | {$kotakide['data'][$idkotakide]['IBJUDUL']}",
        "kotakide"=>$kotakide['data'][$idkotakide],
        "allide"=>$kotakide
    ]);
});
Route::get('kotakide-profit/{kotakide:id}', function ($idkotakide) {
    $kotakide = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/idea_box/get_list_profit?skey=FULLPOWERRR'), true);
    return view('kotakide.detailkotakide',[
        "active"=>'kotakide',
        "title"=>"Detail Kotak Ide | {$kotakide['data'][$idkotakide]['IBJUDUL']}",
        "kotakide"=>$kotakide['data'][$idkotakide],
        "allide"=>$kotakide
    ]);
});
Route::get('/pesanbod',function(){
    $messages = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/news/get_messages_bod?skey=FULLPOWERRR'), true);
    return view('pesanbod',[
        "active"=>'pesanbod',
        "title"=>'Pesan BOD',
        "pesanbod"=> $messages,
        "mActive"=>'none'

    ]);
});
Route::get('/pesanbod/{message:id}',function($idmessage){
    $messages = json_decode(file_get_contents('http://192.168.11.15/moffice2/index.php/news/get_messages_bod?skey=FULLPOWERRR'), true);
    return view('detail-pesan',[
        "title"=> "Pesan BOD | {$messages['data'][$idmessage]['NFJUDUL']}",
        "active"=>'pesanbod',
        "pesan"=> $messages['data'][$idmessage],
        "pesanbod"=> $messages,
        "mActive"=>$idmessage
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
Route::get('/api', function () {
    return view('test-api',[
        "title"=>'news'
    ]);
});


