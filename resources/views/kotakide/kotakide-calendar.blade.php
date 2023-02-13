@extends('layouts.main')
@section('container')
    <header>
        <img src={{ asset('img/header.png') }} alt="header" class="header" />
    </header>
    <div class="position-relative">
        <div class="container-search position-absolute bottom-0 start-50 top-0 translate-middle-x">
            <h6 style="font-weight: 500;
            font-size: 22px;">Cari Ide</h6>
            <div class="col-sm-12">
                <div class="search">
                    <i class="fa fa-search" style="color:  #88888C; font-size: 20px"></i>
                    <input type="text" class="form-control" placeholder="cari...">
                    <button class="btn btn-primary">Cari</button>
                </div>
            </div>
        </div>
    </div>


    {{-- DAFTAR IDE --}}
    <div class="two-colums px-4 text-left" style="margin-top: 120px">
        <div class="row gx-5">
            <div class="col-md-7">
                <div class="margin-title">
                    <span class="txt-title">DAFTAR IDE</span>
                    <a href=""></a>
                </div>
                @include('kotakide.menu')
                <a href="/kotakide/detailkotakide">
                    <div class="row no-gutters card-publikasi">
                        <div class="col-md-4 g-0 ">
                            <img class="img-fluid rounded-end img-pub" src={{ asset('img/publikasi1.png') }} alt="...">
                        </div>
                        <div class="col-md-8 card-body-publikasi">
                            <div class="card-body">
                                <h5 class="card-title" style="padding-top:10px ">PJB Siap Natal dan Tahun Baru 2022!
                                </h5>
                                <h6 class="text-muted">10 Januari 2023</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur. Viverra
                                    sollicitudin rhoncus libero libero vitae. Consequat suspendisse netus
                                    dignissim sed consectetur mauris elementum lectus magna. Phasellus cursus
                                    commodo pulvinar egestas velit egestas non in...</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/kotakide/detailkotakide">
                    <div class="row no-gutters card-publikasi">
                        <div class="col-md-4 g-0">
                            <img class="img-fluid rounded-end img-pub" src={{ asset('img/publikasi1.png') }} alt="...">
                        </div>
                        <div class="col-md-8 card-body-publikasi">
                            <div class="card-body">
                                <h5 class="card-title" style="padding-top:10px ">PJB Siap Natal dan Tahun Baru 2022!
                                </h5>
                                <h6 class="text-muted">10 Januari 2023</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur. Viverra
                                    sollicitudin rhoncus libero libero vitae. Consequat suspendisse netus
                                    dignissim sed consectetur mauris elementum lectus magna. Phasellus cursus
                                    commodo pulvinar egestas velit egestas non in...</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/kotakide/detailkotakide">
                    <div class="row no-gutters card-publikasi">
                        <div class="col-md-4 g-0">
                            <img class="img-fluid rounded-end img-pub" src={{ asset('img/publikasi1.png') }} alt="...">
                        </div>
                        <div class="col-md-8 card-body-publikasi">
                            <div class="card-body">
                                <h5 class="card-title" style="padding-top:10px ">PJB Siap Natal dan Tahun Baru 2022!
                                </h5>
                                <h6 class="text-muted">10 Januari 2023</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur. Viverra
                                    sollicitudin rhoncus libero libero vitae. Consequat suspendisse netus
                                    dignissim sed consectetur mauris elementum lectus magna. Phasellus cursus
                                    commodo pulvinar egestas velit egestas non in...</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/kotakide/detailkotakide">
                    <div class="row no-gutters card-publikasi">
                        <div class="col-md-4 g-0">
                            <img class="img-fluid rounded-end img-pub" src={{ asset('img/publikasi1.png') }} alt="...">
                        </div>
                        <div class="col-md-8 card-body-publikasi">
                            <div class="card-body">
                                <h5 class="card-title" style="padding-top:10px ">PJB Siap Natal dan Tahun Baru 2022!
                                </h5>
                                <h6 class="text-muted">10 Januari 2023</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur. Viverra
                                    sollicitudin rhoncus libero libero vitae. Consequat suspendisse netus
                                    dignissim sed consectetur mauris elementum lectus magna. Phasellus cursus
                                    commodo pulvinar egestas velit egestas non in...</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/kotakide/detailkotakide">
                    <div class="row no-gutters card-publikasi">
                        <div class="col-md-4 g-0 ">
                            <img class="img-fluid rounded-end img-pub" src={{ asset('img/publikasi1.png') }} alt="...">
                        </div>
                        <div class="col-md-8 card-body-publikasi">
                            <div class="card-body">
                                <h5 class="card-title" style="padding-top:10px ">PJB Siap Natal dan Tahun Baru 2022!
                                </h5>
                                <h6 class="text-muted">10 Januari 2023</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur. Viverra
                                    sollicitudin rhoncus libero libero vitae. Consequat suspendisse netus
                                    dignissim sed consectetur mauris elementum lectus magna. Phasellus cursus
                                    commodo pulvinar egestas velit egestas non in...</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/kotakide/detailkotakide">
                    <div class="row no-gutters card-publikasi">
                        <div class="col-md-4 g-0">
                            <img class="img-fluid rounded-end img-pub" src={{ asset('img/publikasi1.png') }} alt="...">
                        </div>
                        <div class="col-md-8 card-body-publikasi">
                            <div class="card-body">
                                <h5 class="card-title" style="padding-top:10px ">PJB Siap Natal dan Tahun Baru 2022!
                                </h5>
                                <h6 class="text-muted">10 Januari 2023</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur. Viverra
                                    sollicitudin rhoncus libero libero vitae. Consequat suspendisse netus
                                    dignissim sed consectetur mauris elementum lectus magna. Phasellus cursus
                                    commodo pulvinar egestas velit egestas non in...</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/kotakide/detailkotakide">
                    <div class="row no-gutters card-publikasi">
                        <div class="col-md-4 g-0 ">
                            <img class="img-fluid rounded-end img-pub" src={{ asset('img/publikasi1.png') }} alt="...">
                        </div>
                        <div class="col-md-8 card-body-publikasi">
                            <div class="card-body">
                                <h5 class="card-title" style="padding-top:10px ">PJB Siap Natal dan Tahun Baru 2022!
                                </h5>
                                <h6 class="text-muted">10 Januari 2023</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur. Viverra
                                    sollicitudin rhoncus libero libero vitae. Consequat suspendisse netus
                                    dignissim sed consectetur mauris elementum lectus magna. Phasellus cursus
                                    commodo pulvinar egestas velit egestas non in...</p>
                            </div>
                        </div>
                    </div>
                </a>
                <div aria-label="Page navigation example" style="justify-content: center; display: flex; ">
                    <ul class="pagination " style="box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.1);">
                        <li class="page-item"><a class="page-link" href="#"><span
                                    aria-hidden="true">&laquo;</span></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><span
                                    aria-hidden="true">&raquo;</span></a></li>
                    </ul>
                </div>

            </div>

            {{-- TERPOPULER --}}

            <div class="col-md-5 margin-left">
                <h3 class="txt-title-right title-kotak-ide">TERPOPULER</h3>
                <div class="line-bold"></div>
                <div class="row" style=" margin: 10px;">
                    <div class="col-md-2 " style="display: flex; justify-content: center">
                        <h1 class="urutan">1</h1>
                    </div>
                    <div class="col">
                        <h3 class="content-title">Melompat Lebih Tinggi Untuk Mencapai Kurva Baru PJB - Edisi 123</h3>
                        <h6 class="content-date">05 Januari 2023</h6>
                    </div>
                </div>
                <div class="line-thin"></div>
                <div class="row" style=" margin: 10px;">
                    <div class="col-md-2 " style="display: flex; justify-content: center">
                        <h1 class="urutan">2</h1>
                    </div>
                    <div class="col">
                        <h3 class="content-title">Melompat Lebih Tinggi Untuk Mencapai Kurva Baru PJB - Edisi 123</h3>
                        <h6 class="content-date">05 Januari 2023</h6>
                    </div>
                </div>
                <div class="line-thin"></div>
                <div class="row" style=" margin: 10px;">
                    <div class="col-md-2 " style="display: flex; justify-content: center">
                        <h1 class="urutan">3</h1>
                    </div>
                    <div class="col">
                        <h3 class="content-title">Melompat Lebih Tinggi Untuk Mencapai Kurva Baru PJB - Edisi 123</h3>
                        <h6 class="content-date">05 Januari 2023</h6>
                    </div>
                </div>
                <div class="line-thin"></div>
                <div class="row" style=" margin: 10px;">
                    <div class="col-md-2 " style="display: flex; justify-content: center">
                        <h1 class="urutan">4</h1>
                    </div>
                    <div class="col">
                        <h3 class="content-title">Melompat Lebih Tinggi Untuk Mencapai Kurva Baru PJB - Edisi 123</h3>
                        <h6 class="content-date">05 Januari 2023</h6>
                    </div>
                </div>
                <div class="line-thin"></div>
                <div class="row" style=" margin: 10px;">
                    <div class="col-md-2 " style="display: flex; justify-content: center">
                        <h1 class="urutan">5</h1>
                    </div>
                    <div class="col">
                        <h3 class="content-title">Melompat Lebih Tinggi Untuk Mencapai Kurva Baru PJB - Edisi 123</h3>
                        <h6 class="content-date">05 Januari 2023</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
