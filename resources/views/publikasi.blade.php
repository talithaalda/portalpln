@extends('layouts.main')
@section('container')
    <header>
        <img src={{ asset('img/header.png') }} alt="header" class="header" />
    </header>
    <div class="position-relative">
        <div class="container-search position-absolute bottom-0 start-50 top-0 translate-middle-x">
            <h6 style="font-weight: 500;
            font-size: 22px;">Cari Publikasi</h6>
            <div class="col-sm-12">
                <div class="search">
                    <i class="fa fa-search" style="color:  #88888C; font-size: 20px"></i>
                    <input type="text" class="form-control" placeholder="cari...">
                    <button class="btn btn-primary">Cari</button>
                </div>
            </div>
        </div>
    </div>


    {{-- PUBLIKASI TERKINI --}}
    <div class="two-colums px-4 text-left" style="margin-top: 120px">
        <div class="row gx-5">
            <div class="col-md-7">
                <div class="margin-title">
                    <span class="txt-title">PUBLIKASI TERKINI</span>
                    <a href=""></a>
                </div>
                @foreach ($publikasi as $key => $p)
                    <a href="/publikasi/{{ $key }}">
                        <div class="row no-gutters card-publikasi">
                            <div class="col-md-4 g-0 fill ">
                                <img class=" rounded-end img-pub" src="{{ $p['MDFPATH'] }}" alt="...">
                            </div>
                            <div class="col-md-8 card-body-publikasi">
                                <div class="card-body">
                                    <h5 class="card-title" style="padding-top:10px ">{{ $p['MGJUDUL'] }}
                                    </h5>
                                    <h6 class="text-muted">{{ tgl_indo(substr($p['CREATED'], 0, 10)) }}</h6>
                                    <p class="card-text mt-3">{{ substr($p['MGTEXT'], 0, 200) }}...</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

                {{ $publikasi->links() }}

            </div>

            {{-- TERPOPULER --}}
            @php
                $data_terpopuler = $allpub;
                $key_values = array_column($data_terpopuler, 'download');
                $key_values = array_column($key_values, 'DOWNLOADCOUNT');
                array_multisort($key_values, SORT_DESC, $data_terpopuler);
                
            @endphp

            <div class="col-md-5 margin-left">
                <h3 class="txt-title-right title-kotak-ide">TERPOPULER</h3>
                <div class="line-bold"></div>
                @foreach (array_slice($data_terpopuler, 0, 5) as $p)
                    <?php
                    $key = array_search($p['MGID'], array_column($allpub, 'MGID'));
                    ?>
                    <a href="/publikasi/{{ $key }}">
                        <div class="row" style=" margin: 10px;">
                            <div class="col-md-2 " style="display: flex; justify-content: center">
                                <h1 class="urutan">{{ $loop->index + 1 }}</h1>
                            </div>
                            <div class="col">
                                <h3 class="content-title">{{ $p['MGJUDUL'] }}</h3>
                                <h6 class="content-date">{{ tgl_indo(substr($p['CREATED'], 0, 10)) }}</h6>
                            </div>
                        </div>
                        <div class="line-thin"></div>
                    </a>
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
