@extends('layouts.main')
@section('container')
    <div class="header-detail">
    </div>
    <div class="container-pub">
        <div class="col">
            <a href="/publikasi" class="back"><i class="bi bi-chevron-left"></i> Kembali ke Publikasi</a>
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
                                    <span class="txt-desc-pub"><i class="bi bi-download icon-desc"></i>
                                        Diunduh 162 kali</span>
                                </div>
                                <div class="col margin-img-desc-left" style="height: 60px;">
                                    <span class="txt-desc-pub"><i class="bi bi-calendar2 icon-desc"></i>
                                        10 Januari 2023</span>
                                </div>

                            </div>

                            <div class="btn-download mt-3">
                                <a class="btn btn-blue download p-2" type="button" href="#"><i
                                        class="bi bi-cloud-arrow-down-fill"></i> UNDUH
                                    VERSI LENGKAP</a>
                            </div>

                        </div>
                        <div class="col-md-8 px-4">
                            <div class="container">
                                <h1 class="content-header mb-4">
                                    Melompat Lebih Tinggi Untuk Mencapai Kurva Baru PJB - Edisi 123
                                </h1>
                                <p class="content-desc"
                                    style="font-weight: 400;
                                        font-size: 18px;">
                                    <b>Saatnya Melompat Untuk Meraih Kurva Baru PJB di lnfo PJB Edisi 1 23!</b>
                                    <br>
                                    Info PJB Edisi 123 bulan Juli 2021 membahas mengenai kurva baru / PJB New Curve yang
                                    telah digaungkan oleh Direktur Utama. Apa itu kurva baru? Bagaimana cara meraihnya?
                                    Ketahui lebih banyak pada Info PJB Edisi ini.

                                    <br>
                                    <br>

                                    <b>Makin Hijau, PJB Tambahkan Komersialisasi Co-Firing di 3 PLTU!</b>
                                    <br>
                                    Niat PJB dalam menghijaukan PLTU di Indonesia ternyata masih berlanjut hingga Semester 1
                                    di tahun 2021. Pada awal Juni lalu, PJB langsung meresmikan komersialisasi cofiring pada
                                    PLTU Paiton 9, PLTU Indramayu, dan PLTU Tj. Awar-awar.

                                    <br>
                                    <br>

                                    <b>Ada Yang Baru di Muara Karang!</b>
                                    <br>
                                    PJB baru saja melakukan COD untuk PLTGU Muara Karang. Lantas apa yang spesial dari
                                    pembangkitan di wilayah Ibu Kota ini? Cek halaman 12 pada Info PJB edisi 123 untuk
                                    mendapatkan jawabannya.

                                    Seluruh informasi terkini tentang PjB dapat Iangsung dibaca di Info PjB Edisi 123.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="rekomendasi">
        <div class="col g-0">
            <div class="txt-title-right" style="margin: 100px 0 20px 12px">Rekomendasi</div>
        </div>
        <div class="col gap-3 rekomendasi-group">
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
