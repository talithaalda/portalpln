@extends('layouts.main')
@section('container')
    <div class="header-detail">
    </div>
    <div class="container-pub">
        <div class="col">
            <a href="/kotakide-latest" class="back"><i class="bi bi-chevron-left"></i> Kembali ke Kotak Ide</a>
        </div>
        <div class="col">
            <div class="container-detail-pub">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-4">
                            <div class="container-pub-left">
                                <div class="col" style="padding: 10%;border-bottom: 0.5px solid #979797 ">
                                    @if ($kotakide['media'] != null)
                                        <img class="img-detail-pub" src="{{ $kotakide['media'][0]['MDFPATH'] }}"
                                            alt="..." alt="">
                                    @else
                                        <img class="img-detail-pub" src={{ asset('img/no-img.png') }} alt="..."
                                            alt="">
                                    @endif
                                </div>
                                {{-- <div class="col margin-img-desc-left"
                                    style="height: 60px;border-bottom: 0.5px solid #979797">
                                    <span class="txt-desc-pub"><i class="bi bi-book icon-desc"></i>
                                    </span>
                                </div> --}}
                                <div class="col margin-img-desc-left" style="height: 60px;">
                                    <span class="txt-desc-pub"><i class="bi bi-calendar2 icon-desc"></i>
                                        {{ tgl_indo(substr($kotakide['CREATED'], 0, 10)) }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 px-4">
                            <div class="container">
                                <h1 class="content-header mb-4">
                                    {{ $kotakide['IBJUDUL'] }}
                                </h1>
                                <p class="content-desc"
                                    style="font-weight: 400;
                                        font-size: 18px;">
                                    {!! str_replace("\n", '<br>', $kotakide['IBTEXT']) !!}
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

    @php
        $randomData = $allide['data'];
        shuffle($randomData);
        
    @endphp
    <div class="rekomendasi">
        <div class="col g-0">
            <div class="txt-title-right" style="margin: 100px 0 20px 12px">Rekomendasi</div>
        </div>
        <div class="col gap-4 rekomendasi-group mb-4">
            @foreach (array_slice($randomData, 0, 6) as $a)
                <?php
                $key = array_search($a['IBID'], array_column($allide['data'], 'IBID'));
                ?>
                <a href="/publikasi/{{ $key }}">
                    <div class="card-rekomendasi card" style="width: 13rem;">
                        @if ($a['media'] != null)
                            <img src="{{ $a['media'][0]['MDFPATH'] }}" class="card-img-top" alt="..." height="210px">
                        @else
                            <img src={{ asset('img/no-img.png') }} class="card-img-top" alt="..." height="210px">
                        @endif

                        <div class="mt-3">
                            <h5 class="card-title-rekom">{{ substr($a['IBJUDUL'], 0, 40) }}...</h5>
                            <p class="publish">Dipublikasikan {{ tgl_indo(substr($a['CREATED'], 0, 10)) }} </p>
                        </div>
                    </div>
                </a>
            @endforeach

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
