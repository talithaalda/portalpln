<link rel="stylesheet" href={{ asset('css/calendar.css?v=') . time() }} />

@extends('layouts.main')
@section('container')
    <header>
        <img src={{ asset('img/header.png') }} alt="header" class="header" />
    </header>

    {{-- <div class="main">
        <div class="main-left">
            <h3 class="txt-title">APLIKASI</h3>
            <div class="container">
                <div class="card"></div>
            </div>
        </div>
        <div class="main-right">
            <h3 class="txt-title">AGENDA</h3>
            <div class="container">
                <div class="card"></div>
            </div>
        </div>
    </div> --}}


    {{-- APLIKASI --}}


    <div class="two-colums px-4 text-left mt-4 margin-app">
        <div class="row gx-5">
            <div class="col-md-7">
                <h3 class="txt-title">APLIKASI</h3>
                <div class="card card-app">

                    <div class="card-group">
                        <a href="">
                            <div class="rectangle">
                                <div class="card-body text-primary text-center">
                                    <img src={{ asset('img/instagram.png') }} alt="instagram" width="54px" />
                                    <p class="txt-app">Instagram</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="rectangle">
                                <div class="card-body text-primary text-center">
                                    <img src={{ asset('img/travel-bag.png') }} alt="SPPD" width="54px" />
                                    <p class="txt-app">SPPD</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="rectangle">
                                <div class="card-body text-primary text-center">
                                    <img src={{ asset('img/to-do-list.png') }} alt="to-dolist" width="54px" />
                                    <p class="txt-app">To-do List</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="rectangle">
                                <div class="card-body text-primary text-center">
                                    <img src={{ asset('img/email.png') }} alt="email" width="54px" />
                                    <p class="txt-app">Email</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="rectangle">
                                <div class="card-body text-primary text-center">
                                    <img src={{ asset('img/twitter.png') }} alt="twitter" width="54px" />
                                    <p class="txt-app">Twitter</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <a href="" class="all-apps">Semua
                        Aplikasi</a>

                </div>

            </div>

            {{-- AGENDA KORPORAT --}}
            <div class="col-md-5 margin-right mb-4 mob-mb">
                <h3 class="txt-title-right">AGENDA KORPORAT</h3>

                <body class="light">

                    <div class="calendar">
                        <div class="calendar-header">
                            <div class="month-picker"></div>
                            <span id="month-picker">February</span>
                            <div class="year-picker">
                                <span class="year-change" id="prev-year">
                                    <pre><</pre>
                                </span>
                                <span id="year">2021</span>
                                <span class="year-change" id="next-year">
                                    <pre>></pre>
                                </span>
                            </div>
                        </div>
                        <div class="calendar-body">
                            <div class="calendar-week-day">
                                <div>Min</div>
                                <div>Sen</div>
                                <div>Sel</div>
                                <div>Rab</div>
                                <div>Kam</div>
                                <div>Jum</div>
                                <div>Sab</div>
                            </div>
                            <div class="calendar-days"></div>
                            <div class="modal fade" id="agendaPopUp" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content" style="border-radius: 12px;">
                                        <div class="modal-header" style="border: none">
                                            <div style="padding: 14px 14px 0 14px">
                                                <h3>Agenda Hari Ini</h3>
                                                <h3 id="agendaDate" style="color: #00A2E9">Rabu, 11 Januari 2023</h3>
                                            </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body list-agenda">
                                            <a class="container-agenda" data-bs-toggle="collapse" href="#agenda1collapse"
                                                role="button" aria-expanded="false" aria-controls="agendacollapse">
                                                <div class="d-flex gap-3 align-items-center">
                                                    <img src={{ asset('img/Icon-agenda.png') }} alt="">
                                                    <div class="agenda-name">Meeting</div>
                                                </div>
                                                <div class="jam">
                                                    09:00 WIB - 10:00 WIB
                                                </div>
                                            </a>
                                            <div class="collapse" id="agenda1collapse">
                                                <div class="d-flex gap-3"
                                                    style="flex-direction: column; padding-left: 20px">
                                                    <div class="container-detail-agenda">
                                                        <div class="icon-detail-agenda">
                                                            <div class="icon-detail-agenda">
                                                                <i class="bi bi-clock" style="font-size: 25px"></i>
                                                            </div>
                                                        </div>
                                                        <div>09:00 WIB - 10:00 WIB</div>
                                                    </div>
                                                    <div class="container-detail-agenda">
                                                        <div class="icon-detail-agenda">
                                                            <div class="icon-detail-agenda">
                                                                <i class="bi bi-geo-alt" style="font-size: 25px"></i>
                                                            </div>
                                                        </div>
                                                        <div>PLN Nusantara Power</div>
                                                    </div>
                                                    <div class="container-detail-agenda">
                                                        <div class="icon-detail-agenda">
                                                            <div class="icon-detail-agenda">
                                                                <i class="bi bi-card-text" style="font-size: 25px"></i>
                                                            </div>
                                                        </div>
                                                        <div>Lorem ipsum dolor sit amet consectetur.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="container-agenda" data-bs-toggle="collapse" href="#agenda2collapse"
                                                role="button" aria-expanded="false" aria-controls="agendacollapse">
                                                <div class="d-flex gap-3 align-items-center">
                                                    <img src={{ asset('img/Icon-agenda.png') }} alt="">
                                                    <div class="agenda-name">Meeting</div>
                                                </div>
                                                <div class="jam">
                                                    09:00 WIB - 10:00 WIB
                                                </div>
                                            </a>
                                            <div class="collapse" id="agenda2collapse">
                                                <div class="d-flex gap-3"
                                                    style="flex-direction: column; padding-left: 20px">
                                                    <div class="container-detail-agenda">
                                                        <div class="icon-detail-agenda">
                                                            <div class="icon-detail-agenda">
                                                                <i class="bi bi-clock" style="font-size: 25px"></i>
                                                            </div>
                                                        </div>
                                                        <div>09:00 WIB - 10:00 WIB</div>
                                                    </div>
                                                    <div class="container-detail-agenda">
                                                        <div class="icon-detail-agenda">
                                                            <div class="icon-detail-agenda">
                                                                <i class="bi bi-geo-alt" style="font-size: 25px"></i>
                                                            </div>
                                                        </div>
                                                        <div>PLN Nusantara Power</div>
                                                    </div>
                                                    <div class="container-detail-agenda">
                                                        <div class="icon-detail-agenda">
                                                            <div class="icon-detail-agenda">
                                                                <i class="bi bi-card-text" style="font-size: 25px"></i>
                                                            </div>
                                                        </div>
                                                        <div>Lorem ipsum dolor sit amet consectetur.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="container-agenda" data-bs-toggle="collapse" href="#agenda3collapse"
                                                role="button" aria-expanded="false" aria-controls="agendacollapse">
                                                <div class="d-flex gap-3 align-items-center">
                                                    <img src={{ asset('img/Icon-agenda.png') }} alt="">
                                                    <div class="agenda-name">Meeting</div>
                                                </div>
                                                <div class="jam">
                                                    09:00 WIB - 10:00 WIB
                                                </div>
                                            </a>
                                            <div class="collapse" id="agenda3collapse">
                                                <div class="d-flex gap-3"
                                                    style="flex-direction: column; padding-left: 20px">
                                                    <div class="container-detail-agenda">
                                                        <div class="icon-detail-agenda">
                                                            <div class="icon-detail-agenda">
                                                                <i class="bi bi-clock" style="font-size: 25px"></i>
                                                            </div>
                                                        </div>
                                                        <div>09:00 WIB - 10:00 WIB</div>
                                                    </div>
                                                    <div class="container-detail-agenda">
                                                        <div class="icon-detail-agenda">
                                                            <div class="icon-detail-agenda">
                                                                <i class="bi bi-geo-alt" style="font-size: 25px"></i>
                                                            </div>
                                                        </div>
                                                        <div>PLN Nusantara Power</div>
                                                    </div>
                                                    <div class="container-detail-agenda">
                                                        <div class="icon-detail-agenda">
                                                            <div class="icon-detail-agenda">
                                                                <i class="bi bi-card-text" style="font-size: 25px"></i>
                                                            </div>
                                                        </div>
                                                        <div>Lorem ipsum dolor sit amet consectetur.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="month-list"></div>
                    </div>

                    <script src={{ asset('js/calendar.js?v=') . time() }}></script>
            </div>
        </div>
    </div>

    {{-- PESAN BOD --}}

    <div class="margin">
        <span class="txt-title">PESAN</span>
        <span class="txt-title-italic">BOARD OF DIRECTORS</span>
        <div class="pesanbod text-center">
            <img class="mt-5" src={{ asset('img/chat.png') }} alt="">
            <p class="header-bod mt-3  text-center">PETUAH (Pesan Untuk Diamanahkan) Edisi Gong Matua Hasibuan
                (Direktur
                Utama PT PJB)
                Vol.3</p>
            <p class="desc-bod  text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor
                incididunt ut
                labore et dolore
                magna aliqua. Ut enim ad minim veniam,...</p>
        </div>

    </div>

    {{-- PENGUMUMAN --}}

    <div class="two-colums px-4 text-left mt-5">
        <div class="row gx-5">
            <div class="col-md-7">
                <div class="margin-title">
                    <span class="txt-title">PENGUMUMAN</span>
                    <a href=""><span class="selengkapnya">Selengkapnya <i class="fa-solid fa-angle-right"
                                style="color:#0A436B"></i></span></a>
                </div>
                <div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">

                    <div class="carousel-inner card-pengumuman">
                        <div class="carousel-item active " data-bs-interval="10000">
                            <div class="card" style="border: 0">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src={{ asset('img/pengumuman1.png') }} class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title" style="padding-top:10px ">Testimoni Pegawai
                                                Subholding
                                                Energi Primer
                                            </h5>
                                            <h6 class="text-muted">05 Januari 2023</h6>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit,
                                                sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua....</p>
                                            <a href="" class="mt-5 float-end mb-4 all-apps">Baca Lebih
                                                Banyak</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="card" style="border: 0">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src={{ asset('img/pengumuman1.png') }} class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title" style="padding-top:10px ">Testimoni Pegawai
                                                Subholding
                                                Energi Primer
                                            </h5>
                                            <h6 class="text-muted">05 Januari 2023</h6>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit,
                                                sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua....</p>
                                            <a href="" class="mt-5 float-end mb-4 all-apps">Baca Lebih
                                                Banyak</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="card" style="border: 0">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src={{ asset('img/pengumuman1.png') }} class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title" style="padding-top:10px ">Testimoni Pegawai
                                                Subholding
                                                Energi Primer
                                            </h5>
                                            <h6 class="text-muted">05 Januari 2023</h6>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit,
                                                sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua....</p>
                                            <a href="" class="mt-5 float-end mb-4 all-apps">Baca Lebih
                                                Banyak</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-slide mt-3">
                        <button class="btn-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="bi bi-arrow-left-circle" style="font-size: 30px" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>

                        </button>
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <button class="btn-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="bi bi-arrow-right-circle" style="font-size: 30px" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            {{-- KOTAK IDE --}}

            <div class="col-md-5 margin-left">
                <h3 class="txt-title-right title-kotak-ide">KOTAK IDE</h3>
                <div class="line-bold"></div>
                <div class="" style=" margin: 10px;">
                    <h3 class="content-title">Melompat Lebih Tinggi Untuk Mencapai Kurva Baru PJB - Edisi 123</h3>
                    <h6 class="content-date">05 Januari 2023</h6>

                </div>
                <div class="line-thin"></div>
                <div class="" style=" margin: 10px;">
                    <h3 class="content-title">Melompat Lebih Tinggi Untuk Mencapai Kurva Baru PJB - Edisi 123</h3>
                    <h6 class="content-date">05 Januari 2023</h6>

                </div>
                <div class="line-thin"></div>
                <div class="" style=" margin: 10px;">
                    <h3 class="content-title">Melompat Lebih Tinggi Untuk Mencapai Kurva Baru PJB - Edisi 123</h3>
                    <h6 class="content-date">05 Januari 2023</h6>

                </div>
                <div class="line-thin"></div>
                <div class="text-center" style="margin:20px;">
                    <button type="button" class="btn btn-outline-dark">Lihat Lebih Banyak Kotak Ide</button>
                </div>
            </div>
        </div>
    </div>


    {{-- ARTIKEL --}}

    <div class="two-colums px-4 text-left mt-5 margin-app">
        <div class="row gx-5">
            <div class="col-md-7">
                <div class="margin-title">
                    <span class="txt-title">ARTIKEL</span>
                    <a href=""><span class="selengkapnya">Selengkapnya <i class="fa-solid fa-angle-right"
                                style="color:#0A436B"></i></span></a>
                </div>

                <div class="card " style="margin:20px 0 25px 0;border: none;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src={{ asset('img/artikel1.png') }} class="card-img" alt="..." width="288px"
                                height="172px">
                        </div>
                        <div class="col-md-8" style="padding: 0">
                            <div class="card-body-artikel" style="padding: 0">
                                <h5 class="card-title">PJB Siap Siaga Natal dan Tahun Baru 2022
                                </h5>
                                <h6 class="text-muted">05 Januari 2023</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam....
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card " style="margin:20px 0 25px 0;border: none;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src={{ asset('img/artikel1.png') }} class="card-img" alt="..." width="288px"
                                height="172px">
                        </div>
                        <div class="col-md-8" style="padding: 0">
                            <div class="card-body-artikel" style="padding: 0">
                                <h5 class="card-title">PJB Siap Siaga Natal dan Tahun Baru 2022
                                </h5>
                                <h6 class="text-muted">05 Januari 2023</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam....
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card " style="margin:20px 0 25px 0;border: none;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src={{ asset('img/artikel1.png') }} class="card-img" alt="..." width="288px"
                                height="172px">
                        </div>
                        <div class="col-md-8" style="padding: 0">
                            <div class="card-body-artikel" style="padding: 0">
                                <h5 class="card-title">PJB Siap Siaga Natal dan Tahun Baru 2022
                                </h5>
                                <h6 class="text-muted">05 Januari 2023</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam....
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card " style="margin:20px 0 25px 0;border: none;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src={{ asset('img/artikel1.png') }} class="card-img" alt="..." width="288px"
                                height="172px">
                        </div>
                        <div class="col-md-8" style="padding: 0">
                            <div class="card-body-artikel" style="padding: 0">
                                <h5 class="card-title">PJB Siap Siaga Natal dan Tahun Baru 2022
                                </h5>
                                <h6 class="text-muted">05 Januari 2023</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam....
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card " style="margin:20px 0 25px 0;border: none;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src={{ asset('img/artikel1.png') }} class="card-img" alt="..." width="288px"
                                height="172px">
                        </div>
                        <div class="col-md-8" style="padding: 0">
                            <div class="card-body-artikel" style="padding: 0">
                                <h5 class="card-title">PJB Siap Siaga Natal dan Tahun Baru 2022
                                </h5>
                                <h6 class="text-muted">05 Januari 2023</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam....
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- PUBLIKASI --}}

            <div class="col-md-5 margin-left">
                <h3 class="txt-title-right">PUBLIKASI</h3>
                <div class="line-bold"></div>
                <div class="" style=" margin: 10px;">
                    <h3 class="content-title">Melompat Lebih Tinggi Untuk Mencapai Kurva Baru PJB - Edisi 123</h3>
                    <h6 class="content-date">05 Januari 2023</h6>

                </div>
                <div class="line-thin"></div>
                <div class="" style=" margin: 10px;">
                    <h3 class="content-title">Melompat Lebih Tinggi Untuk Mencapai Kurva Baru PJB - Edisi 123</h3>
                    <h6 class="content-date">05 Januari 2023</h6>

                </div>
                <div class="line-thin"></div>
                <div class="" style=" margin: 10px;">
                    <h3 class="content-title">Melompat Lebih Tinggi Untuk Mencapai Kurva Baru PJB - Edisi 123</h3>
                    <h6 class="content-date">05 Januari 2023</h6>

                </div>
                <div class="line-thin"></div>
                <div class="text-center" style="margin:20px;">
                    <a href="/publikasi">
                        <button type="button" class="btn btn-outline-dark">Lihat Lebih Banyak Publikasi</button></a>
                </div>


                {{-- UNDUH --}}
                <h3 class="txt-title-right mt-5">UNDUH</h3>
                <div class="line-bold"></div>
                <div style="margin-left: 10px">
                    <h3 class="mt-3" style="font-weight: 500;
                font-size: 18px;">Template dan Form
                    </h3>
                    <div class="" style="margin-left: 5px">
                        <div class="mt-3 mb-2">
                            <a href="#">
                                <img src="{{ asset('img/template.png') }}" alt="template" class="icon" />
                                <span class="unduh-txt">Formulir Permohonan BPPR</span>
                            </a>
                        </div>
                        <div class="mb-2">
                            <a href="#">
                                <img src="{{ asset('img/template.png') }}" alt="template" class="icon" />
                                <span class="unduh-txt">Formulir Pelaporan Gratifikasi</span>
                            </a>
                        </div>
                        <div class="mb-2">
                            <a href="#">
                                <img src="{{ asset('img/template.png') }}" alt="template" class="icon" />
                                <span class="unduh-txt">Form Secondary Position (Employee)</span>
                            </a>
                        </div>
                        <div class="mb-2">
                            <a href="#">
                                <img src="{{ asset('img/template.png') }}" alt="template" class="icon" />
                                <span class="unduh-txt">Form Permintaan Hak Akses dan Secondary
                                    Position (Non-employee)</span>
                            </a>
                        </div>
                        <div class="mb-2">
                            <a href="#">
                                <img src="{{ asset('img/template.png') }}" alt="template" class="icon" />
                                <span class="unduh-txt">Template URF (User Request Form)</span>
                            </a>
                        </div>
                        <div class="mb-2">
                            <a href="#">
                                <img src="{{ asset('img/template.png') }}" alt="template" class="icon" />
                                <span class="unduh-txt">Request for Change</span>
                            </a>
                        </div>
                        <div class="mb-2">
                            <a href="#">
                                <img src="{{ asset('img/template.png') }}" alt="aplikasi" class="icon" />
                                <span class="unduh-txt">Arsip PLN SATU</span>
                            </a>
                        </div>
                        <div class="mb-2">
                            <a href="#">
                                <img src="{{ asset('img/template.png') }}" alt="aplikasi" class="icon" />
                                <span class="unduh-txt">Powerpoint Korporat</span>
                            </a>
                        </div>
                    </div>
                    <h3 class="mt-3" style="font-weight: 500;
                font-size: 18px;">Video</h3>
                    <div class="" style="margin-left: 5px">
                        <div class="mt-3 mb-2">
                            <a href="#">
                                <img src={{ asset('img/video.png') }} alt="video" class="icon" />
                                <span class="unduh-txt">Company Profile</span>
                            </a>
                        </div>
                        <div class="mb-2">
                            <a href="#">
                                <img src={{ asset('img/video.png') }} alt="video" class="icon" />
                                <span class="unduh-txt">Safety Briefing & Prosedur Tamu</span>
                            </a>
                        </div>
                        <div class="mb-2">
                            <a href="#">
                                <img src="{{ asset('img/video.png') }}" alt="video" class="icon" />
                                <span class="unduh-txt">Mars & Hymne PLN</span>
                            </a>
                        </div>
                        <div class="mb-2">
                            <a href="#">
                                <img src="{{ asset('img/video.png') }}" alt="video" class="icon" />
                                <span class="unduh-txt">lndonesia Raya</span>
                            </a>
                        </div>

                    </div>
                    <h3 class="mt-3 " style="font-weight: 500;
                font-size: 18px;">Dokumen</h3>
                    <div class="mb-5" style="margin-left: 5px">
                        <div class="mt-3 mb-2">
                            <a href="#">
                                <img src="{{ asset('img/dokumen.png') }}" alt="dokumen" class="icon" />
                                <span class="unduh-txt">lnfo PLN NP News</span>
                            </a>
                        </div>
                        <div class="mb-2">
                            <a href="#">
                                <img src="{{ asset('img/dokumen.png') }}" alt="dokumen" class="icon" />
                                <span class="unduh-txt">Setting Email Korporat</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
