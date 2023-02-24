<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href={{ asset('img/logoShort.png') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/8b992594d2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href={{ asset('css/styles.css?v=') . time() }} />
    <link rel="stylesheet" href={{ asset('js/styles.js?v=') . time() }} />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="left-navbar">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <img class="logosidebar" src={{ asset('img/logo.png') }} alt="losgo" width="220px" />
                <div class="offcanvas-body" style="margin-left: 25px; margin-right: 35px">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <div class="sidebar-mobile mt-3">
                            <li class="nav-item {{ $active == 'beranda' ? 'active' : ' ' }}">
                                <a href="/">
                                    <img src="{{ asset('img/home.png') }}" alt="aplikasi" class="icon" />
                                    <span class="txt-item">Beranda</span>
                                </a>
                            </li>
                            <li class="nav-item {{ $active == 'aplikasi' ? 'active' : ' ' }}">
                                <a href="tentang">
                                    <img src="{{ asset('img/about.png') }}" alt="aplikasi" class="icon" />
                                    <span class="txt-item">Tentang</span>
                                </a>
                            </li>
                        </div>
                        <li class="nav-item {{ $active == 'aplikasi' ? 'active' : ' ' }}">
                            <a href="/aplikasi">
                                <img src="{{ asset('img/aplikasi.png') }}" alt="aplikasi" class="icon" />
                                <span class="txt-item">Aplikasi</span>
                            </a>
                        </li>
                        <li class="nav-item {{ $active == 'pesanbod' ? 'active' : ' ' }}">
                            <a href="/pesanbod/0">
                                <img src="{{ asset('img/pesanbod.png') }}" alt="aplikasi" class="icon" />
                                <span class="txt-item">Pesan BOD</span>
                            </a>
                        </li>
                        <li class="nav-item {{ $active == 'pengumuman' ? 'active' : ' ' }}">
                            <a href="/pengumuman">
                                <img src={{ asset('img/pengumuman.png') }} alt="aplikasi" class="icon" />
                                <span class="txt-item">Pengumuman</span>
                            </a>
                        </li>
                        <li class="nav-item {{ $active == 'artikel' ? 'active' : ' ' }}">
                            <a href="/artikel">
                                <img src={{ asset('img/artikel.png') }} alt="aplikasi" class="icon" />
                                <span class="txt-item">Artikel</span>
                            </a>
                        </li>
                        <li class="nav-item {{ $active == 'publikasi' ? 'active' : ' ' }}">
                            <a href="/publikasi">
                                <img src={{ asset('img/publikasi.png') }} alt="aplikasi" class="icon" />
                                <span class="txt-item">Publikasi</span>
                            </a>
                        </li>
                        <li class="nav-item {{ $active == 'kotakide' ? 'active' : ' ' }}">
                            <a href="/kotakide-latest">
                                <img src={{ asset('img/kotakide.png') }} alt="aplikasi" class="icon" />
                                <span class="txt-item">Kotak Ide</span>
                            </a>
                        </li>
                        <li class="nav-item {{ $active == 'kontak' ? 'active' : ' ' }}">
                            <a href="/kotakide-latest">
                                <img src={{ asset('img/kontak.png') }} alt="aplikasi" class="icon" />
                                <span class="txt-item">Kontak</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <a class="navbar-brand" href="#">Offcanvas navbar</a> -->
            <img src={{ asset('img/logo.png') }} alt="Logo" class="logo" width="150" />
            <!-- <a class="navbar-brand" href="#">Offcanvas navbar</a> -->
        </div>
        <div class="right-navbar">
            <a class="navbar-brand {{ $active == 'beranda' ? 'active' : ' ' }}" href="/"> BERANDA</a>
            <a class="navbar-brand {{ $active == 'aplikasi' ? 'active' : ' ' }}" href="/aplikasi">APLIKASI</a>
            <a class="navbar-brand" href="/tentang">TENTANG</a>
            <button class="btn btn-blue login" type="button" href="" data-bs-toggle="modal"
                data-bs-target="#loginpopup">LOGIN</button>

        </div>
    </nav>

    <div class="modal fade" id="loginpopup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 12px;">
                <div class="modal-header" style="border: none">
                    <img src={{ asset('img/logo.png') }} alt="" width="30%">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h3 class="d-flex justify-content-center mt-3">Login</h3>
                    <div class="mb-3 p-5 pt-3">
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="form-label">NID</label>
                            <div class="form-container">
                                <i class="icon-login fa-solid fa-user"></i>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <div class="form-container">
                                <i class="icon-login fa-solid fa-lock"></i>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="d-flex mb-4 p-1" style="justify-content: space-between;">
                            <div class="checkbox d-flex align-items-center gap-2">
                                <input type="checkbox" id="rememberme" name="rememberme" value="rememberme"
                                    style="width: 20px; height: 20px;">
                                <label for="rememberme"> Ingat saya?</label>
                            </div>
                            <label> Lupa Password?</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <a class="btn btn-blue login-popup" type="button" href="#">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('container')
    <div class="footer ">
        <div class="container text-left">
            <div class="row align-items-start">
                <div class="col-lg-5 mb-4">
                    <img src={{ asset('img/logo-footer.png') }} alt="logo" width="80%" height="99px">
                </div>
                <div class="col-lg-3">
                    <h6 class="header-footer">Tentang</h6>
                    <p class="desc-footer" style="width: 95%">
                        PLN Nusantara Power terdepan dan terpercaya dalam bisnis energi berkelanjutan di Asia Tenggara
                    </p>
                </div>
                <div class="col ">
                    <h6 class="header-footer">Kontak</h6>
                    <div class="gap-2" style="display: flex;flex-direction: column">
                        <p class="desc-footer"><i class="bi bi-geo-alt"></i> Jl. Ketintang Baru No. 11,
                            Surabaya, Indonesia</p>
                        <p class="desc-footer"><i class="bi bi-envelope-at"></i> info@plnnusantarapower.co.id</p>
                        <p class="desc-footer"><i class="bi bi-telephone"></i> +62318283180</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
