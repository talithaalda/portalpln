@extends('layouts.main')
@section('container')
    <div class="header-detail">
    </div>
    <div class="container-pub">
        <div class="col">
            <a href="/publikasi" class="back"><i class="bi bi-chevron-left"></i> Kembali ke Artikel</a>
        </div>
        <div class="col">
            <div class="container-detail-pub">

                <div class="container">
                    <div class="row ">
                        <div class="col-md-4">
                            <div class="container-pub-left">
                                <div class="col" style="padding: 10%;border-bottom: 0.5px solid #979797 ">
                                    <img class="img-detail-pub" src="{{ asset('img/publikasi1.png') }}" alt="">
                                </div>
                                <div class="col margin-img-desc-left"
                                    style="height: 60px;border-bottom: 0.5px solid #979797">
                                    <span class="txt-desc-pub"><i class="bi bi-book icon-desc"></i>
                                        Dibaca 162 kali</span>
                                </div>
                                <div class="col margin-img-desc-left" style="height: 60px;">
                                    <span class="txt-desc-pub"><i class="bi bi-calendar2 icon-desc"></i>
                                        10 Januari 2023</span>
                                </div>

                            </div>



                        </div>
                        <div class="col-md-8">
                            <div class="container">
                                <h1 class="content-header mb-4">
                                    PJB Siap Siaga Natal dan Tahun Baru 2022
                                </h1>
                                <p class="content-desc"
                                    style="font-weight: 400;
                                        font-size: 18px;">
                                    Terimakasih untuk ribuan PJBers yang siap siaga mendukung pasokan listrik tetap menyala
                                    selama hari Raya Natal & Tahun Baru.
                                    Terimakasih & selamat juga untuk PJBers yang telah mengikuti PJB Year End Giveaway vol
                                    2.
                                    <br>
                                    <br>
                                    <b>Pengumuman Giveaway</b>
                                    <br>
                                    Pengumuman pemenang dapat dicek di link berikut : s.id/PJBYearEndGiveaway2


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment">
                    <img src={{ asset('img/logo.png') }} alt="" width="200px">
                    <div class="container-comment">
                        <input type="text" class="input-comment" placeholder="Masukan Komentar">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="rekomendasi">
        <div class="col g-0">
            <div class="txt-title-right" style="margin: 100px 0 20px 12px">Rekomendasi</div>
        </div>
        <div class="col gap-4 rekomendasi-group mb-4">
            <div class="card-rekomendasi card" style="width: 13rem;">
                <img src={{ asset('img/publikasi1.png') }} class="card-img-top" alt="...">
                <div class="mt-3">
                    <h5 class="card-title-rekom">Dirut PLN : "PJB Harus Terus Kembangkan Teknologi" - Edisi 122</h5>
                    <p class="publish">Dipublikasikan 22 Juni 2021</p>
                </div>
            </div>
            <div class="card-rekomendasi card" style="width: 13rem;">
                <img src={{ asset('img/publikasi1.png') }} class="card-img-top" alt="...">
                <div class="mt-3">
                    <h5 class="card-title-rekom">Dirut PLN : "PJB Harus Terus Kembangkan Teknologi" - Edisi 122</h5>
                    <p class="publish">Dipublikasikan 22 Juni 2021</p>
                </div>
            </div>
            <div class="card-rekomendasi card" style="width: 13rem;">
                <img src={{ asset('img/publikasi1.png') }} class="card-img-top" alt="...">
                <div class="mt-3">
                    <h5 class="card-title-rekom">Dirut PLN : "PJB Harus Terus Kembangkan Teknologi" - Edisi 122</h5>
                    <p class="publish">Dipublikasikan 22 Juni 2021</p>
                </div>
            </div>
            <div class="card-rekomendasi card" style="width: 13rem;">
                <img src={{ asset('img/publikasi1.png') }} class="card-img-top" alt="...">
                <div class="mt-3">
                    <h5 class="card-title-rekom">Dirut PLN : "PJB Harus Terus Kembangkan Teknologi" - Edisi 122</h5>
                    <p class="publish">Dipublikasikan 22 Juni 2021</p>
                </div>
            </div>
            <div class="card-rekomendasi card" style="width: 13rem;">
                <img src={{ asset('img/publikasi1.png') }} class="card-img-top" alt="...">
                <div class="mt-3">
                    <h5 class="card-title-rekom">Dirut PLN : "PJB Harus Terus Kembangkan Teknologi" - Edisi 122</h5>
                    <p class="publish">Dipublikasikan 22 Juni 2021</p>
                </div>
            </div>

        </div>
    </div>
@endsection
