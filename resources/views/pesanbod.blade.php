@extends('layouts.main')
@section('container')
    <header>
        <img src={{ asset('img/headerpesanbod.png') }} alt="header" class="header" />
    </header>
    <div class="row g-0">
        <div class="col" style=" margin-left: 55px">
            <h1 class="imgheaderbod">PESAN <span style="font-style: italic;">BOARD OF DIRECTORS</span>
            </h1>
        </div>
        <div class="col">
        </div>
    </div>
    <div class="position-relative">
        <div class="container-search position-absolute bottom-0 start-50 top-0 translate-middle-x">
            <h6 style="font-weight: 500;
            font-size: 22px;">Cari Pesan BOD</h6>
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
                    @foreach ($pesanbod['data'] as $p)
                        @php
                            $index = $loop->index;
                        @endphp
                        <a href="/pesanbod/{{ $index }}">
                            <div class="container-pesan {{ $index == $mActive ? 'mActive' : ' ' }}">
                                <div class="row g-0">
                                    <div class="col-md-10 g-0" style=" ">
                                        <div class="card-title-bod">{{ substr($p['NFJUDUL'], 0, 100) }}</div>
                                        <p class="card-text-bod">
                                            {{ substr($p['NFTEXT'], 0, 150) }}...
                                        </p>
                                    </div>
                                    <div class="col-md-2 g-0">
                                        <h6 class="text-date-bod">
                                            {{ date('d/m/Y', strtotime($p['CREATED'])) }}</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
            <div class="col-md-7 isi-pesan">

                <div class="container-isi-pesan">
                    <div id="no-content">Pilih pesan BOD untuk dibaca di sini.</div>
                    @yield('container-isi-pesan')

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
