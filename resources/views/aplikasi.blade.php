@extends('layouts.main')
@section('container')
    <header>
        <img src={{ asset('img/applicationBanner.png') }} alt="header" class="header" />
    </header>
    <div class="row g-0">
        <div class="col" style=" margin-left: 55px">
            <h1 class="imgheaderbod">Aplikasi
            </h1>
        </div>
        <div class="col">
        </div>
    </div>
    <div class="position-relative">
        <div class="container-search position-absolute bottom-0 start-50 top-0 translate-middle-x">
            <h6 style="font-weight: 500;
            font-size: 22px;">Cari Aplikasi</h6>
            <div class="col-sm-12">
                <div class="search">
                    <i class="fa fa-search" style="color:  #88888C; font-size: 20px"></i>
                    <input type="text" class="form-control" placeholder="cari...">
                    <button class="btn btn-primary">Cari</button>
                </div>
            </div>
        </div>
    </div>
    <div class="" style="background-color: #F4F5F9">
        <div class="two-colums px-4 text-left" style="padding-top: 120px">
            <div class="row g-0">
                <div class="col-md-7 overflow-auto " style="height: 700px;">
                    <h3 class="txt-title">SOCIAL MEDIA</h3>
                    <div class="app-list">
                        <a href="/aplikasi/detailaplikasi">
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
                                    <img src={{ asset('img/twitter.png') }} alt="twitter" width="54px" />
                                    <p class="txt-app">Twitter</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="rectangle">
                                <div class="card-body text-primary text-center">
                                    <img src={{ asset('img/youtube.png') }} alt="youtube" width="54px" />
                                    <p class="txt-app">YouTube</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <h3 class="txt-title">HR ON HAND</h3>
                    <div class="app-list">
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
                                    <img src={{ asset('img/myhome.png') }} alt="myhome" width="54px" />
                                    <p class="txt-app">My Home</p>
                                </div>
                            </div>
                        </a>


                    </div>

                    <h3 class="txt-title">GENERAL</h3>
                    <div class="app-list">
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
                                    <img src={{ asset('img/oa.png') }} alt="oa" width="54px" />
                                    <p class="txt-app">OA</p>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>

                <div class="col-md-5">
                    <div class="app-detail">
                        <div class="card-profile">
                            <div class="d-flex px-5 mt-4 justify-content-center">
                                <img src={{ asset('img/logo.png') }} alt="..." width="300px">
                            </div>

                            <div class="card-body p-4">
                                <h5 class="card-title d-flex justify-content-center"> <b>Kontak Kami</b> </h5>
                                <div class="mt-4 d-flex" style="flex-direction: column;">
                                    <div class="d-flex gap-3" style="align-items: center"><i class="bi bi-geo-alt "
                                            style="font-size: 30px"></i>
                                        Jl.
                                        Ketintang Baru No.
                                        11,Surabaya, Indonesia</div>
                                    <div class="d-flex gap-3" style="align-items: center"><i class="bi bi-envelope-at"
                                            style="font-size: 30px"></i> info@plnnusantarapower.co.id
                                    </div>
                                    <div class="d-flex gap-3" style="align-items: center"><i class="bi bi-telephone"
                                            style="font-size: 30px"></i> +62318283180</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
