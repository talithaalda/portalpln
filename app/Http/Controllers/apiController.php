<?php

namespace App\Http\Controllers;
use App\Models\messages;
use Illuminate\Http\Request;

class apiController extends Controller
{
    public function beranda(){
        $messages = file_get_contents('http://192.168.11.15/moffice2/index.php/news/get_messages_bod?skey=FULLPOWERRR');
        $messages = json_decode($messages, true);
        $messages = new messages($messages);
        return view('beranda',[
            "active"=>'beranda',
            "title"=>'Beranda',
            "pesanbod"=> $messages
        ]);
    }
    public function pesanbod(){
        $messages = file_get_contents('http://192.168.11.15/moffice2/index.php/news/get_messages_bod?skey=FULLPOWERRR');
        $messages = json_decode($messages, true);
        $messages = new messages($messages);
        return view('pesanbod',[
            "active"=>'pesanbod',
            "title"=>'Pesan BOD',
            "pesanbod"=> $messages,
            "mActive"=>'none'

        ]);
    }
    public function showpesanbod($idmessage){
        $messages = file_get_contents('http://192.168.11.15/moffice2/index.php/news/get_messages_bod?skey=FULLPOWERRR');
        $messages = json_decode($messages, true);
        $messages = new messages($messages);
        return view('detail-pesan',[
            "title"=> 'Pesan BOD',
            "active"=>'pesanbod',
            "pesan"=> $messages['data'][$idmessage],
            "pesanbod"=> $messages,
            "mActive"=>$idmessage
        ]);
    }
}
