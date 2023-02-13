@extends('layouts.main')
@section('container')
    <div class="header-detail">
    </div>
    <div class="container-pub">
        <div class="col">
            <a href="/publikasi" class="back"><i class="bi bi-chevron-left"></i> Kembali ke Pengumuman</a>
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
                                    <span class="txt-desc-pub"><i class="bi bi-heart icon-desc"></i>
                                        Sukai</span>
                                </div>
                                <div class="col margin-img-desc-left" style="height: 60px;">
                                    <span class="txt-desc-pub"><i class="bi bi-calendar2 icon-desc"></i>
                                        10 Januari 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="container">
                                <h1 class="content-header mb-2">
                                    Fail Safe
                                </h1>
                                <p><i class="bi bi-person-fill" style="color: #777777"></i> YUSUF FARIDUSOLEH</p>
                                <p class="content-desc"
                                    style="font-weight: 400;
                                        font-size: 18px;">
                                    Pembangkit semakin banyak, peralatan utama
                                    wajib aman..coba PLN NP buka peluang produsen
                                    listrik DC (battery unit).. Ya untuk unit, untuk
                                    mobil listrik, plts rumahan.. Mahalnya 1 sel
                                    rusak..


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
