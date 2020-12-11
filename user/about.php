<?php
    session_start();
    // check login
    if ( !isset($_SESSION["LOGIN"])){
        // redirect
        header("Location: ../index");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- CSS External -->
    <link rel="stylesheet" href="../css/main.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Aos Animate -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Font awesome bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- Logo in tittle website -->
    <link rel="shortcut icon" href="../img/logo.png">

    <title>About Coffepedia</title>
</head>

<body>
    <!--                                          HEADER SECTION                                          -->
    <header>
        <div class="navbar-wrapper">
            <nav class="navbar container navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="home">
                    <img src="../img/logo.png" alt="" style="width: 50px;"> Coffepedia
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="form">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="events">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link signup-button mb-1" href="logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--                                       END HEADER SECTION                                          -->

    <!--                                     SECTION  ABOUT HEADER                                        -->
    <div class="about">
        <div class="container">
            <h1>About Coffepedia</h1>
        </div>
    </div>
    <!--                                  END SECTION  ABOUT HEADER                                        -->

    <!--                                VISION AND MISSION SECTION                                -->
    <section class="container">
        <div class="flex content">
            <div class="left" data-aos="slide-up">
                <div class="img-about">
                    <img src="../img/pexels-benjamin-suter-2700533.jpg" alt="">
                </div>
            </div>
            <div class="right data-aos="slide-up"">
                <p class="edit">WELCOME TO COFFEPEDIA</p>
                <h2>Vision And Mission</h2>
                <p>Sebagai komunitas terbesar pecinta kopi di Indonesia yang selalu mengadakan events baik offline
                    maupun
                    online. Kami memili Sebuah Visi dan Misi diantaranya : </p>
                <h3>Our Vision :</h3>
                <strong>"Connect with people"</strong>
                <p>Melalui visi itu kami dapat membantu para pecinta kopi untuk bergabung dengan kami
                    dan mendapatkan
                    keluarga baru untuk tertawa dan minum bareng kopi dikala waktu kosong. </p>

                <h3>Our Mission :</h3>
                <strong>"Spread Happines to Everyone with Coffee taste"</strong>
                <p>Melalui misi ini kami akan memberikan kesenangan dan sharing kepada anggota komunitas kami dengan
                    memberi tambahan ilmu wawasan tentang kopi.</p>
            </div>
        </div>
    </section>
    <!--                                END VISION AND MISSION SECTION                                -->

    <!--                                LOCATION SECTION                                -->
    <section class="contact-info">
        <div class="container text-center">
            <h1>How to reach us ?</h1>
            <p>Our Location</p>
        </div>
    </section>

    <section class="detail-location">
        <div class="container">
            <div class="flex">
                <div class="left">
                    <div class="gmap" data-aos="zoom-in-up">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1188918001712!2d106.90503741449359!3d-6.248060362916692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e21c4bc22d%3A0x8a79e3c1b8695f4d!2sSTMIK%20NUSA%20MANDIRI%20TOWER!5e0!3m2!1sid!2sid!4v1606114280414!5m2!1sid!2sid"
                            width="300" height="300" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                </div>
                <div class="right">
                    <ul>
                        <li>
                            <a href="https://www.google.com/maps/place/STMIK+NUSA+MANDIRI+TOWER/@-6.2480604,106.9050374,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69f3e21c4bc22d:0x8a79e3c1b8695f4d!8m2!3d-6.2480657!4d106.9072261"
                                target="_blank">Central
                                Office</a>
                            <p>RT.8/RW.13, Cipinang Melayu, Kec. Makasar, Kota Jakarta Timur, Daerah Khusus Ibukota
                                Jakarta 13620
                            </p>
                            <p>Phone : 0877-4111-0605</p>
                        </li>
                        <li>
                            <a href="https://www.google.com/maps/place/STMIK+Nusa+Mandiri+Kaliabang/@-6.2026556,106.9999707,17z/data=!3m1!4b1!4m5!3m4!1s0x2e698b4ba19cd143:0x4e83b0f99421a79e!8m2!3d-6.2026609!4d107.0021594"
                                target="_blank">Zone#1
                                Office</a>
                            <p>Jl. Kaliabang No.67, Perwira, Kec. Bekasi Utara, Kota Bks, Jawa Barat 17124
                            </p>
                            <p>Phone : (021)88985613</p>
                        </li>
                        <li>
                            <a href="https://www.google.com/maps/place/STMIK+Nusa+Mandiri+Kampus+Margonda/@-6.3578025,106.8300952,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69ed5873b95e8f:0x73a3d74cfe631348!8m2!3d-6.3578078!4d106.8322839"
                                target="_blank">Zone#2
                                Office</a>
                            <p>Jl. Margonda Raya No.545, RW.7, Pondok Cina, Beji, Depok City, West Java 16424
                            </p>
                            <p>Phone : 0821-1118-1504</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--                               END LOCATION SECTION                                -->

    <!--                                          FOOTER SECTION                                          -->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 segment-one mb">
                        <h2>Coffepedia</h2>
                        <p>A coffee lovers community platform that has been established since 2015 and has more than 5000 active members.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 segment-second mb">
                        <h2>Navigate</h2>
                        <ul>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 segment-third mb">
                        <h2>Follow Us</h2>
                        <p>Please Follow us on our social media profile in order to keep update about more
                            information.
                        </p>
                        <a href="#" data-aos="fade-up"><i class="fa fa-facebook"></i></a>
                        <a href="#" data-aos="fade-up"><i class="fa fa-instagram"></i></a>
                        <a href="#" data-aos="fade-up"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 segment-fourth">
                        <h2>Community</h2>
                        <p>Address : RT.8/RW.13, Cipinang Melayu, Makasar, East Jakarta City, Jakarta 13620</p>
                        <p>Telephone : 0877-4111-0605</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="footer-bottom text-center">All Right reserved by &copy;Coffepedia 2020</div>
    <!--                                     END FOOTER SECTION                                          -->

    <!-- Navbar animate -->
    <script src="../js/navbar-scroll.js"></script>

    <!-- Aos Animate -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 500
        });
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>