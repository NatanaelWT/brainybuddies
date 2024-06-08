<?php

include "views/user/partials/head.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Slider</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        .swiper-container {
            width: 100%;
            height: 100%;
            max-width: 600px;
            /* Ensuring the slider doesn't exceed this width */
            margin: 0 auto;
            /* Center the slider */
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            /* Teks di bawah gambar */
        }

        .swiper-slide img {
            width: 100%;
            height: auto;
            max-width: 300px;
            /* Ensuring the image doesn't exceed this width */
            max-height: 300px;
            /* Ensuring the image doesn't exceed this height */
            object-fit: cover;
            padding: 10px;
        }

        /* Ensuring the page doesn't shift due to vertical scrollbar */
        html {
            overflow-y: scroll;
        }

        /* Tambahkan gaya CSS berikut */
        body,
        html {
            overflow-x: hidden;
            /* Mencegah pengguna menggeser ke kanan */
        }

        .swiper-container {
            width: 100%;
            height: 100%;
            max-width: 600px;
            /* Ensuring the slider doesn't exceed this width */
            margin: 0 auto;
            /* Center the slider */
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            /* Teks di bawah gambar */
        }

        .swiper-slide img {
            width: 100%;
            height: auto;
            max-width: 300px;
            /* Ensuring the image doesn't exceed this width */
            max-height: 300px;
            /* Ensuring the image doesn't exceed this height */
            object-fit: cover;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
            /* Menambahkan bayangan hitam */
        }

        /* Ensuring the page doesn't shift due to vertical scrollbar */
        html {
            overflow-y: scroll;
        }
    </style>
</head>

<body>
    <div id="wrapper" class="home-page">
        <!-- start header -->
        <?php
        include "views/user/partials/header.php";
        ?>
        <!-- end header -->

        <section id="banner">
            <!-- Slider -->
            <div id="main-slider" class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="src/img/slides/6.jpg" alt="" />
                        <div class="flex-caption container">
                            <img src="src/img/img8.png" alt="" style="width:12%; float: left; margin-right: 10px;">
                            <h3>HALLO TEMAN-TEMAN...</h3>
                            <p>Selamat Datang Di Brainybuddies </p>
                        </div>
                    </li>
                    <li>
                        <img src="src/img/slides/7.jpg" alt="" />
                        <div class="flex-caption container">
                            <img src="src/img/img4.png" alt="" style="width:16%; float: right; margin-left: 10px;">
                            <h3>Selamat Belajar...</h3>
                            <p>dengan berbagai mata pelajaran yang menyenangkan</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- end slider -->
        </section>

        <section class="txt-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="aligncenter">
                            <h1 class="aligncenter">Our Courses</h1>
                            <p>Media Pembelajaran untuk meningkatkan keterampilan siswa dalam berbagai bidang pengetahuan. Kami menyediakan kursus-kursus yang dirancang untuk membantu mencapai tujuan belajar siswa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="features">
                        <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="0ms" style="visibility: visible; -webkit-animation-durations: 300ms; -webkit-animation-delays: 0ms;">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-calculator"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Matematika</h4>
                                    <p>Pelajaran matematika bertujuan mengembangkan kemampuan berpikir logis, analitis, dan pemecahan masalah.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="100ms" style="visibility: visible; -webkit-animation-durations: 300ms; -webkit-animation-delays: 100ms;">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-flask"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">IPA</h4>
                                    <p>Mengembangkan pemahaman tentang alam semesta, kehidupan, fenomena alam dan keterampilan berpikir kritis dan analitis.</p>
                                </div>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="200ms" style="visibility: visible; -webkit-animation-durations: 300ms; -webkit-animation-delays: 200ms;">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-university"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">IPS</h4>
                                    <p>Memahami dinamika masyarakat, perkembangan peradaban, interaksi antar individu dan kelompok dalam konteks sosial.</p>
                                </div>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="300ms" style="visibility: visible; -webkit-animation-durations: 300ms; -webkit-animation-delays: 300ms;">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">PPKN</h4>
                                    <p>Membentuk karakter yang berakhlak mulia, berwawasan dan memahami tanggung jawab sebagai warga negara.</p>
                                </div>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="400ms" style="visibility: visible; -webkit-animation-durations: 300ms; -webkit-animation-delays: 400ms;">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-book"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Bahasa Indonesia</h4>
                                    <p>Bahasa Indonesia mencakup Keterampilan mendengarkan, berbicara, membaca, dan menulis dalam bahasa Indonesia</p>
                                </div>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="500ms" style="visibility: visible; -webkit-animation-durations: 300ms; -webkit-animation-delays: 500ms;">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-language"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Bahasa Inggris</h4>
                                    <p>Bahasa Inggris mencakup keterampilan mendengarkan, berbicara, membaca, dan menulis dalam bahasa Inggris</p>
                                </div>
                            </div>
                        </div><!--/.col-md-4-->
                    </div>
                </div>
            </div>
        </section>

        <section class="aboutUs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aligncenter">
                            <h2 class="aligncenter" style="padding-top: 10px;">Belajar Bersama BrainyBuddies</h2>
                        </div>
                        <br />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="src/img/img3.png" alt="">
                        <div class="space"></div>
                    </div>
                    <div class="col-md-6">
                        <p style="align-items: center; justify-content:center; padding-top:70px;"> BrainyBuddies, kami menyediakan pendekatan holistik terhadap pendidikan yang mencakup keunggulan akademik, pemikiran kritis, dan pengembangan pribadi. Program kami dirancang untuk menginspirasi dan menantang siswa, membantu mereka menjadi individu yang percaya diri dan mampu.</p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Menumbuhkan kecintaan pada pembelajaran</li>
                            <li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Mendorong pemikiran kritis</li>
                            <li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Pengembangan pribadi yang holistik</li>
                            <li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Menginspirasi dan menantang siswa</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id='events'>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aligncenter">
                            <h2 class="aligncenter">Our Teacher</h2>Belajar bersama para guru yang baik hati dan menggemaskan kita.
                        </div>
                        <br>
                    </div>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="src/img/guru1.jpg" alt="">
                            <div>
                                <p>Anindya Meyla</p>
                                <p>Matematika</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="src/img/guru2.jpg" alt="">
                            <div>
                                <p>Tom David</p>
                                <p>IPA</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="src/img/guru3.jpg" alt="">
                            <div>
                                <p>Firdaus Yunus</p>
                                <p>IPS</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="src/img/guru4.jpg" alt="">
                            <div>
                                <p>Ainiyah Dini</p>
                                <p>PPKN</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="src/img/guru5.jpg" alt="">
                            <div>
                                <p>Raihan Matt</p>
                                <p>Bahasa Inggris</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="src/img/guru6.jpg" alt="">
                            <div>
                                <p>Syawaliyah</p>
                                <p>Bahsa Indonesia</p>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <?php
        include "views/user/partials/footer.php";
        ?>
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <?php
    include "views/user/partials/foot.php";
    ?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 3000, // Adjust the delay time as needed
                disableOnInteraction: false,
            },
        });
    </script>
</body>

</html>