@extends('pesanbod')
@section('container-isi-pesan')
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
    <script>
        document.getElementById("no-content").style.display = "none";
    </script>
    <div id="isi-pesan">
        <h6 class="content-date mb-3">{{ tgl_indo(substr($pesan['CREATED'], 0, 10)) }}</h6>
        <h1 class="content-header mb-4">
            {{ $pesan['NFJUDUL'] }}
        </h1>
        <div class="img-bod">
            <img src="{{ $pesan['media'][0]['MDFPATH'] }}" alt="" width="60%" style="border-radius: 20px">
        </div>

        <p class="content-desc mt-4 p-4" style="font-weight: 400;font-size: 17px;">
            {!! str_replace("\n", '<br>', $pesan['NFTEXT']) !!}

        </p>

    </div>
@endsection
