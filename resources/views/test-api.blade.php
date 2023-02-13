@php
    $news = file_get_contents('http://192.168.11.15/moffice2/index.php/news/get_messages_bod?skey=FULLPOWERRR');
    $news = json_decode($news, true);
@endphp

<p>Status : {{ $news['status'] }}</p>
{{-- <p>Messages : {{ $news['message'] }}</p> --}}
