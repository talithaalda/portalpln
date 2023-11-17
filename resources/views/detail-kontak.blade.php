@extends('kontak')
@section('container-detail-kontak')
    <script>
        document.getElementById("no-content").style.display = "none";
    </script>
    <div id="isi-pesan">

        <div class="img-bod">
            <img src="{{ asset('img/icon-kontak.png') }}" alt="" width="20%" style="border-radius: 20px">
        </div>
        <h1 class="content-header mb-4 mt-4 d-flex justify-content-center">
            A. M. BASKARA JOYO
        </h1>
        <div class="detail-kontak">
            <div class="container-kontak">
                <div class="baris-kontak d-flex gap-2">
                    <div class="judul-detail-kontak">
                        No. Induk Pegawai :
                    </div>
                    <div class="isi-detail-kontak">
                        12157996578
                    </div>
                </div>
                <div class="baris-kontak d-flex gap-2">
                    <div class="judul-detail-kontak">
                        Unit Kerja :
                    </div>
                    <div class="isi-detail-kontak">
                        Kantor Pusat PJB
                    </div>
                </div>
                <div class="baris-kontak d-flex gap-2">
                    <div class="judul-detail-kontak">
                        Jabatan :
                    </div>
                    <div class="isi-detail-kontak">
                        OFFICER IT DEVELOPMENT &
                        BUSINESS ANALYST-A
                    </div>
                </div>
                <div class="baris-kontak d-flex gap-2">
                    <div class="judul-detail-kontak">
                        Divisi :
                    </div>
                    <div class="isi-detail-kontak">
                        Bidang Teknologi dan Informasi
                    </div>
                </div>
                <div class="baris-kontak d-flex gap-2">
                    <div class="judul-detail-kontak">
                        Email :
                    </div>
                    <div class="isi-detail-kontak">
                        baskara123@gmail.com
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
