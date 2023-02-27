@extends('layouts.main')
@section('container')
    <header>
        <img src={{ asset('img/headerpesanbod.png') }} alt="header" class="header" />
    </header>
    <div class="row g-0">
        <div class="col" style=" margin-left: 55px">
            <h1 class="imgheaderbod">Kontak Pegawai
            </h1>
        </div>
        <div class="col">
        </div>
    </div>
    <div class="position-relative">
        <div class="container-search position-absolute bottom-0 start-50 top-0 translate-middle-x">
            <h6 style="font-weight: 500;
            font-size: 22px;">Cari Kontak</h6>
            <div class="col-sm-12">
                <div class="search">
                    <i class="fa fa-search" style="color:  #88888C; font-size: 20px"></i>
                    <input type="text" class="form-control" placeholder="cari...">
                    <button class="btn btn-primary">Cari</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-bod">
        <div class="row g-0">
            <div class="col-md-5 list-pesan">
                <div class="overflow-auto d-flex gap-3"
                    style="max-height: 900px; flex-direction: column;padding: 0px 20px 10px 20px">
                    {{-- @foreach ($pesanbod['data'] as $p)
                        @php
                            $index = $loop->index;
                        @endphp --}}
                    <a href="/kontak/1">
                        <div class="container-pesan ">
                            <div class="row g-0">
                                <div class="col-md-10 g-0">
                                    <div class="d-flex align-items-center gap-4">
                                        <img src={{ asset('img/icon-kontak.png') }} alt="">
                                        <div class="card-title-bod">A. M. BASKARA JOYO</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                    <a href="/kontak/1">
                        <div class="container-pesan ">
                            <div class="row g-0">
                                <div class="col-md-10 g-0">
                                    <div class="d-flex align-items-center gap-4">
                                        <img src={{ asset('img/icon-kontak.png') }} alt="">
                                        <div class="card-title-bod">A. M. BASKARA JOYO</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                    <a href="/kontak/1">
                        <div class="container-pesan ">
                            <div class="row g-0">
                                <div class="col-md-10 g-0">
                                    <div class="d-flex align-items-center gap-4">
                                        <img src={{ asset('img/icon-kontak.png') }} alt="">
                                        <div class="card-title-bod">A. M. BASKARA JOYO</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                    <a href="/kontak/1">
                        <div class="container-pesan ">
                            <div class="row g-0">
                                <div class="col-md-10 g-0">
                                    <div class="d-flex align-items-center gap-4">
                                        <img src={{ asset('img/icon-kontak.png') }} alt="">
                                        <div class="card-title-bod">A. M. BASKARA JOYO</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                    <a href="/kontak/1">
                        <div class="container-pesan ">
                            <div class="row g-0">
                                <div class="col-md-10 g-0">
                                    <div class="d-flex align-items-center gap-4">
                                        <img src={{ asset('img/icon-kontak.png') }} alt="">
                                        <div class="card-title-bod">A. M. BASKARA JOYO</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                    <a href="/kontak/1">
                        <div class="container-pesan ">
                            <div class="row g-0">
                                <div class="col-md-10 g-0">
                                    <div class="d-flex align-items-center gap-4">
                                        <img src={{ asset('img/icon-kontak.png') }} alt="">
                                        <div class="card-title-bod">A. M. BASKARA JOYO</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                    <a href="/kontak/1">
                        <div class="container-pesan ">
                            <div class="row g-0">
                                <div class="col-md-10 g-0">
                                    <div class="d-flex align-items-center gap-4">
                                        <img src={{ asset('img/icon-kontak.png') }} alt="">
                                        <div class="card-title-bod">A. M. BASKARA JOYO</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                    <a href="/kontak/1">
                        <div class="container-pesan ">
                            <div class="row g-0">
                                <div class="col-md-10 g-0">
                                    <div class="d-flex align-items-center gap-4">
                                        <img src={{ asset('img/icon-kontak.png') }} alt="">
                                        <div class="card-title-bod">A. M. BASKARA JOYO</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                    <a href="/kontak/1">
                        <div class="container-pesan ">
                            <div class="row g-0">
                                <div class="col-md-10 g-0">
                                    <div class="d-flex align-items-center gap-4">
                                        <img src={{ asset('img/icon-kontak.png') }} alt="">
                                        <div class="card-title-bod">A. M. BASKARA JOYO</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                    {{-- @endforeach --}}

                </div>
            </div>
            <div class="col-md-7 isi-pesan">

                <div class="container-isi-pesan">
                    <div id="no-content">Pilih kontak untuk dibaca disini.</div>
                    @yield('container-detail-kontak')

                </div>
                {{-- <script>
                    function myFunction() {
                        document.getElementById("no-content").style.display = "none";
                        document.getElementById("isi-pesan").style.display = "block";
                    }
                </script> --}}
            </div>
        </div>
    </div>
@endsection
