<!DOCTYPE html>
<!--
Template name: Nova
Template author: FreeBootstrap.net
Author website: https://freebootstrap.net/
License: https://freebootstrap.net/license
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Flo.do | Blooming your memories </title>

    <!-- ======= Google Font =======-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
    <link rel="icon" href="favicon.ico">
    <!-- End Google Font-->

    <!-- Vendor Styles -->
    <link href="{{ asset('assets/vendors/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/glightbox/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/aos/aos.css') }}" rel="stylesheet">

    <!-- Theme Style -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <!-- ======= Site Wrap =======-->
    <div class="site-wrap">


        <!-- ======= Header =======-->
        <header class="fbs__net-navbar navbar navbar-expand-lg dark" aria-label="freebootstrap.net navbar">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between w-100">

                    <!-- Logo -->
                    <a class="navbar-brand w-auto" href="index.html">
                        <img class="logo dark img-fluid" src="assets/images/logo.jpg" alt="img">
                    </a>

                    <!-- Desktop Navigation -->
                    <nav class="d-none d-lg-block">
                        <ul class="navbar-nav flex-row gap-4">
                            <li class="nav-item"><a class="nav-link scroll-link active" href="#beranda">Beranda</a></li>
                            <li class="nav-item"><a class="nav-link scroll-link" href="#tentang">Tentang</a></li>
                            <li class="nav-item"><a class="nav-link scroll-link" href="#produk">Produk</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#aktivitas"
                                    data-bs-toggle="dropdown">Aktivitas</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Aktivitas 1</a></li>
                                    <li><a class="dropdown-item" href="#">Aktivitas 2</a></li>
                                    <li><a class="dropdown-item" href="#">Aktivitas 3</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#artikel"
                                    data-bs-toggle="dropdown">Artikel</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Artikel 1</a></li>
                                    <li><a class="dropdown-item" href="#">Artikel 2</a></li>
                                    <li><a class="dropdown-item" href="#">Artikel 3</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link scroll-link" href="#bahasa">Bahasa</a></li>
                            <li class="nav-item"><a class="nav-link scroll-link" href="#kontak">Kontak</a></li>
                        </ul>
                    </nav>

                    <!-- Mobile Toggle -->
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#fbs__net-navbars" aria-controls="fbs__net-navbars"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                </div>
            </div>

            <!-- Offcanvas for Mobile -->
            <div class="offcanvas offcanvas-start w-75 d-lg-none" id="fbs__net-navbars" tabindex="-1"
                aria-labelledby="fbs__net-navbarsLabel">
                <div class="offcanvas-header">
                    <a class="logo-link" id="fbs__net-navbarsLabel" href="index.html">
                        <img class="logo dark img-fluid" src="assets/images/logo.jpg" alt="img">
                    </a>
                    <button class="btn-close btn-close-black" type="button" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav nav ps-lg-5 mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link scroll-link active" href="#beranda">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link scroll-link" href="#tentang">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link scroll-link" href="#produk">Produk</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#aktivitas"
                                data-bs-toggle="dropdown">Aktivitas</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Aktivitas 1</a></li>
                                <li><a class="dropdown-item" href="#">Aktivitas 2</a></li>
                                <li><a class="dropdown-item" href="#">Aktivitas 3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#artikel" data-bs-toggle="dropdown">Artikel</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Artikel 1</a></li>
                                <li><a class="dropdown-item" href="#">Artikel 2</a></li>
                                <li><a class="dropdown-item" href="#">Artikel 3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link scroll-link" href="#bahasa">Bahasa</a></li>
                        <li class="nav-item"><a class="nav-link scroll-link" href="#kontak">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </header>


        <!-- End Header-->

        <!-- ======= Main =======-->
        <main>


            <!-- ======= Hero =======-->
            <section class="hero__v6 section" id="beranda">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="row">
                                <div class="col-lg-11"><span data-aos="fade-up" data-aos-delay="0"></span>
                                    <h1 class="hero-title mt-3" data-aos="fade-up" data-aos-delay="100">Abadikan
                                        indahnya momenmu</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-img"><img class="img-card img-fluid" src="assets/images/self-photo.jpeg"
                                    alt="Image card" data-aos="fade-down" data-aos-delay="600"><img
                                    class="img-main img-fluid rounded-4" src="assets/images/Flower arranging.jpeg"
                                    alt="Hero Image" data-aos="fade-in" data-aos-delay="500">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Hero-->
            </section>
            <!-- End Hero-->

            <!-- ======= About =======-->
            <section class="about__v4 section" id="tentang">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 order-md-2">
                            <div class="row justify-content-end">
                                <div class="col-md-11 mb-4 mb-md-0"><span class="subtitle text-uppercase mb-3"
                                        data-aos="fade-up" data-aos-delay="0">Tentang</span>
                                    <h2 class="mb-1" data-aos="fade-up" data-aos-delay="100">Flo.do | Tempat
                                        kenangan indah dimulai</h2>
                                    <div class="mission-statement p-4 rounded-4 d-flex gap-4" data-aos="fade-up"
                                        data-aos-delay="100">
                                        <div>
                                            <p class="fs-10 mb-0">Flo.do menghadirkan rangkaian bunga segar dan studio
                                                foto yang nyaman, agar
                                                setiap momen berhargamu bisa tersimpan dengan hangat. </p>
                                            <a class="fs-10 mb-0" style="color:white; cursor: pointer;">Baca
                                                Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-wrap position-relative"><img class="img-fluid rounded-4"
                                    src="assets/images/tentang.jpeg" alt="img" data-aos="fade-up"
                                    data-aos-delay="0">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About-->

            <!-- ======= Produk =======-->
            <section class="section services__v3" id="produk">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-8 mx-auto text-center"><span class="subtitle text-uppercase mb-3"
                                data-aos="fade-up" data-aos-delay="0">Produk</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between w-100">
                            <h3 class="fs-6 mb-0">Jelajahi Berbagai Produk Kami</h3>
                            <p class="fs-9 mb-0">Lihat Selengkapnya</p>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                            <div class="service-card p-3 rounded-4 h-100">
                                <div>
                                    <div class="img-wrap position-relative"><img class="img-fluid rounded-4"
                                            src="assets/images/buket balon.jpeg" alt="img" data-aos="fade-up"
                                            data-aos-delay="0"></div>
                                    <h3 class="fs-5 mt-3" style="text-align: center;">Buket Balon</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                            <div class="service-card p-3 rounded-4 h-100">
                                <div>
                                    <div class="img-wrap position-relative"><img class="img-fluid rounded-4"
                                            src="assets/images/foto grup.jpeg" alt="img" data-aos="fade-up"
                                            data-aos-delay="0"></div>
                                    <h3 class="fs-5 mt-3" style="text-align: center;">Foto Grup</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                            <div class="service-card p-3 rounded-4 h-100">
                                <div>
                                    <div class="img-wrap position-relative"><img class="img-fluid rounded-4"
                                            src="assets/images/buket dekorasi.jpeg" alt="img" data-aos="fade-up"
                                            data-aos-delay="0"></div>
                                    <h3 class="fs-5 mt-3" style="text-align: center;">Buket Dekorasi</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                            <div class="service-card p-3 rounded-4">
                                <div>
                                    <div class="img-wrap position-relative"><img class="img-fluid rounded-4"
                                            src="assets/images/foto diri.jpeg" alt="img" data-aos="fade-up"
                                            data-aos-delay="0"></div>
                                    <h3 class="fs-5 mt-3" style="text-align: center;">Foto Diri</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Produk-->

            <!-- ======= Aktivitas =======-->
            <section class="section services__v3" id="aktivitas">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-8 mx-auto text-center"><span class="subtitle text-uppercase mb-3"
                                data-aos="fade-up" data-aos-delay="0">Aktivitas</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between w-100">
                            <h3 class="fs-6 mb-0">Jelajahi Berbagai Aktivitas Kami</h3>
                            <p class="fs-9 mb-0">Lihat Selengkapnya</p>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                            <div
                                class="service-card p-3 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div>
                                    <div class="img-wrap position-relative"><img class="img-fluid rounded-4"
                                            src="assets/images/foto grup.jpeg" alt="img" data-aos="fade-up"
                                            data-aos-delay="0"></div>
                                    <h3 class="fs-5 mt-3" style="text-align: center;">Foto Grup</h3>
                                    <h3 class="fs-6 mb-0">Deskripsi aktivitas</h3>
                                    <a class="fs-10 mb-0" style="color:black; cursor: pointer;">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                            <div
                                class="service-card p-3 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div>
                                    <div class="img-wrap position-relative"><img class="img-fluid rounded-4"
                                            src="assets/images/buket dekorasi.jpeg" alt="img" data-aos="fade-up"
                                            data-aos-delay="0"></div>
                                    <h3 class="fs-5 mt-3" style="text-align: center;">Buket Dekorasi</h3>
                                    <h3 class="fs-6 mb-0">Deskripsi aktivitas</h3>
                                    <a class="fs-10 mb-0" style="color:black; cursor: pointer;">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                            <div
                                class="service-card p-3 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div>
                                    <div class="img-wrap position-relative"><img class="img-fluid rounded-4"
                                            src="assets/images/foto diri.jpeg" alt="img" data-aos="fade-up"
                                            data-aos-delay="0"></div>
                                    <h3 class="fs-5 mt-3" style="text-align: center;">Foto Diri</h3>
                                    <h3 class="fs-6 mb-0">Deskripsi aktivitas</h3>
                                    <a class="fs-10 mb-0" style="color:black; cursor: pointer;">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row g-4">
                        <div class="col-md-4 col-lg-6" data-aos="fade-up" data-aos-delay="0">
                            <div
                                class="service-card p-3 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div>
                                    <div class="img-wrap position-relative"><img class="img-fluid rounded-4"
                                            src="assets/images/buket dekorasi.jpeg" alt="img" data-aos="fade-up"
                                            data-aos-delay="0"></div>
                                    <h3 class="fs-5 mt-3" style="text-align: center;">Buket Dekorasi</h3>
                                    <h3 class="fs-6 mb-0">Deskripsi aktivitas</h3>
                                    <a class="fs-10 mb-0" style="color:black; cursor: pointer;">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-6" data-aos="fade-up" data-aos-delay="0">
                            <div
                                class="service-card p-3 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div>
                                    <div class="img-wrap position-relative"><img class="img-fluid rounded-4"
                                            src="assets/images/foto diri.jpeg" alt="img" data-aos="fade-up"
                                            data-aos-delay="0"></div>
                                    <h3 class="fs-5 mt-3" style="text-align: center;">Foto Diri</h3>
                                    <h3 class="fs-6 mb-0">Deskripsi aktivitas</h3>
                                    <a class="fs-10 mb-0" style="color:black; cursor: pointer;">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Aktivitas-->

            <!-- ======= Artikel =======-->
            <section class="section services__v3" id="artikel">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-8 mx-auto text-center"><span class="subtitle text-uppercase mb-3"
                                data-aos="fade-up" data-aos-delay="0">Artikel</span>
                            <p class="fs-9 mb-0">Jelajahi Berbagai Artikel Menarik Kami</p>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-8 col-lg-8" data-aos="fade-up" data-aos-delay="0">
                            <div class="service-card p-3 rounded-4 d-flex flex-column justify-content-between"
                                style=" overflow: hidden;">
                                <img class="rounded-4" src="assets/images/foto diri.jpeg" alt="img"
                                    data-aos="fade-up" data-aos-delay="0"
                                    style="width: 100%; height: 300px; object-fit: cover; border-radius: 1rem;">
                                <div class="text-start mt-4"><span class="subtitle fw-800 fs-7"
                                        style="border-radius: 1rem; margin-right: 10px;" data-aos="fade-up"
                                        data-aos-delay="0">Sosial</span>
                                    <span data-aos="fade-up" data-aos-delay="0">19 September 2025</span>
                                </div>
                                <h3 class="fs-5">Abadikan Momen Terbaikmu</h3>
                                <h3 class="fs-6">Deskripsi artikel</h3>
                                <a class="fs-10 mb-0" style="color:black; cursor: pointer;">Baca Selengkapnya</a>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                            <div
                                class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div>
                                    <div class="d-flex flex-column gap-4">

                                        <div class="text-center">
                                            <h3 class="fs-6 mb-0">Artikel Lainnya</h3>
                                            <hr>
                                        </div>
                                        <div class="d-flex flex-column gap-3">
                                            <div class="d-flex align-items-center gap-4"
                                                style="border: 1px solid #DEDEDE; padding: 8px 22px; border-radius: 16px;">
                                                <i class="bi bi-telephone-fill fs-5 text-primary"></i>
                                                <div>
                                                    <h3 class="fs-6 mb-0">No Telepon</h3>
                                                    <p class="fs-9 mb-0">0896123456</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-4"
                                                style="border: 1px solid #DEDEDE; padding: 8px 22px; border-radius: 16px;">
                                                <i class="bi bi-telephone-fill fs-5 text-primary"></i>
                                                <div>
                                                    <h3 class="fs-6 mb-0">No Telepon</h3>
                                                    <p class="fs-9 mb-0">0896123456</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Artikel-->

            <!-- ======= Kontak =======-->
            <section class="section services__v3" id="kontak">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-8 mx-auto text-center"><span class="subtitle text-uppercase mb-3"
                                data-aos="fade-up" data-aos-delay="0">Kontak</span>
                            <p class="fs-9 mb-0">Hubungi Kami</p>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-8 col-lg-9" data-aos="fade-up" data-aos-delay="0">
                            <div class="service-card p-3 rounded-4 d-flex flex-column justify-content-between gap-5"
                                style="height: 400px;">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.724507302189!2d111.9013767759053!3d-7.601316592387556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e784b0027a0743b%3A0xd34e088a9b19702c!2sFlodo%20(Florist%20%26%20Self%20Photo%20Studio)%20Nganjuk!5e0!3m2!1sid!2sid!4v1690000000000!5m2!1sid!2sid"
                                    loading="lazy" class="rounded-3" style="height: 100%;"
                                    referrerpolicy="no-referrer-when-downgrade" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                            <div
                                class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div class="d-flex flex-column gap-4">
                                    <div class="text-center">
                                        <h3 class="fs-6 mb-0">Hubungi Kami</h3>
                                        <p class="fs-9 mb-0">Kami siap membantu</p>
                                        <hr>
                                    </div>
                                    <div class="d-flex flex-column gap-2">
                                        <div class="d-flex align-items-center gap-4">
                                            <i class="bi bi-telephone-fill fs-5 text-primary"></i>
                                            <div>
                                                <h3 class="fs-6 mb-0">No Telepon</h3>
                                                <p class="fs-9 mb-0">0896123456</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-4">
                                            <i class="bi bi-envelope-fill fs-5 text-primary"></i>
                                            <div>
                                                <h3 class="fs-6 mb-0">Email</h3>
                                                <p class="fs-9 mb-0">flodo@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Kontak-->

            <!-- ======= Footer =======-->
            <footer class="footer pt-5 pb-5">
                <div class="container">
                    <div class="row justify-content-between mb-5 g-xl-5">
                        <div class="col-md-5 mb-5 mb-lg-0">
                            <h3 class="mb-3">Flo.do</h3>
                        </div>
                        <div class="col-md-7">
                            <div class="row g-2">
                                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                                    <h2 class="mb-3">Tautan Berguna</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="page-signup.html">Beranda</a></li>
                                        <li><a href="page-signin.html">Tentang</a></li>
                                        <li><a href="page-forgot-password.html">Artikel</a></li>
                                        <li><a href="page-coming-soon.html">Produk</a></li>
                                        <li><a href="page-portfolio-masonry.html">Kontak</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                                    <h2 class="mb-3">Artikel Kami</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="page-signup.html">Sosial</a></li>
                                        <li><a href="page-signin.html">Tips</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                                    <h2 class="mb-3">Ikuti Kami di:</h2>
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="assets/images/instagram.png" alt="img"
                                                    style="width: 20px; height: 20px;"> <a
                                                    href="page-signup.html">Instagram</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                                    <h2 class="mb-3">Marketplace Kami</h2>
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="assets/images/shopee.png" alt="img"
                                                    style="width: 20px; height: 20px;"> <a
                                                    href="page-signup.html">Shopee</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </footer>
            <!-- End Footer-->

        </main>
    </div>

    <!-- ======= Back to Top =======-->
    <button id="back-to-top"><i class="bi bi-arrow-up-short"></i></button>
    <!-- End Back to top-->

    <!-- ======= Javascripts =======-->

    <script>
        // Daftar gambar
        const images = ["self-photo.jpeg", "Flower arranging.jpeg", "tentang.jpeg"];

        let current = 0;
        const mainImg = document.querySelector(".img-main");
        const cardImg = document.querySelector(".img-card");

        setInterval(() => {
            // main = current
            mainImg.style.opacity = 0;
            cardImg.style.opacity = 0;

            setTimeout(() => {
                mainImg.src = `assets/images/${images[current]}`;
                let next = (current + 1) % images.length;
                cardImg.src = `assets/images/${images[next]}`;

                mainImg.style.opacity = 1;
                cardImg.style.opacity = 1;

                current = next;
            }, 500);
        }, 3000);
    </script>

    <script src="{{ asset('assets/vendors/gsap/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/glightbox/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendors/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/send_email.js') }}"></script>
    <!-- End JavaScripts-->
</body>

</html>
