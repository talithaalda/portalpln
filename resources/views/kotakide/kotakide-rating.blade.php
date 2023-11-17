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
                @foreach ($kotakide as $key => $i)
                    <a href="/kotakide-rating/{{ $key }}">
                        <div class="row no-gutters card-publikasi">
                            <div class="col-md-4 g-0 ">
                                @if ($i['media'] != null)
                                    <img class="img-fluid rounded-end img-pub" src="{{ $i['media'][0]['MDFPATH'] }}"
                                        alt="...">
                                @else
                                    <img class="img-fluid rounded-end img-pub" src="{{ asset('img/no-img.png') }}"
                                        alt="...">
                                @endif
                            </div>
                            <div class="col-md-8 card-body-publikasi">
                                <div class="card-body">
                                    <h5 class="card-title" style="padding-top:10px ">{{ $i['IBJUDUL'] }}
                                    </h5>
                                    <h6 class="text-muted">{{ tgl_indo(substr($i['CREATED'], 0, 10)) }}</h6>
                                    @if (strlen($i['IBTEXT']) <= 200)
                                        <p class="card-text">{{ substr($i['IBTEXT'], 0, 200) }}</p>
                                    @else
                                        <p class="card-text">{{ substr($i['IBTEXT'], 0, 200) }}...</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

                {{ $kotakide->links() }}

            </div>

            {{-- TERPOPULER --}}

            <div class="col-md-5 margin-left">
                <h3 class="txt-title-right title-kotak-ide">TERPOPULER</h3>
                <div class="line-bold"></div>
                @foreach (array_slice($rating, 0, 5) as $key => $r)
                    <a href="/kotakide-rating/{{ $key }}">
                        <div class="row" style=" margin: 10px;">
                            <div class="col-md-2 " style="display: flex; justify-content: center">
                                <h1 class="urutan">{{ $loop->index + 1 }}</h1>
                            </div>
                            <div class="col">
                                <h3 class="content-title">{{ $r['IBJUDUL'] }}</h3>
                                <h6 class="content-date">
                                    {{ tgl_indo(substr($r['CREATED'], 0, 10)) }}</h6>
                            </div>
                        </div>
                    </a>
                    <div class="line-thin"></div>
                @endforeach


            </div>
        </div>
    </div>

    @php
        function tgl_indo($tanggal)
        {
            $bulan = [
                1 => 'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember',
            ];
            $pecahkan = explode('-', $tanggal);
        
            // variabel pecahkan 0 = tanggal
            // variabel pecahkan 1 = bulan
            // variabel pecahkan 2 = tahun
            return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
        }
    @endphp
@endsection
