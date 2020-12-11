<?php
    session_start();
    // check 
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
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

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

    <title>Home | Coffepedia</title>
</head>

<body>

    <header>
        <!--                                          HEADER SECTION                                          -->
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
    
    <!--                                       JUMBOTRON SECTION                                          -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg col-sm-12 col-sm-8">
                    <a href="#" onClick="toggle();">
                        <i class="fa fa-play"></i>
                    </a>
                    <div class="trailer">
                        <video src="../video/coffee.mp4" controls="true"></video>
                        <i class="fa fa-times" onClick="toggle();"></i>
                    </div>
                    <h3>Everyone will <span class="animate"></span></h3>
                    <p>Come, and Join Us</p>
                    <button><a href="events"> Join Events <span></span> </a></button>
                </div>
            </div>
        </div>
    </section>
    <!--                                    END JUMBOTRON SECTION                                          -->

    <!--                                       SECTION ONE                                          -->
    <section id="about" class="sec1">
        <div class="container">
            <div class="col-md-auto">
                <div class="line"></div>
                <h2>What Coffepedia ?</h2>
                <img src="../img/humaaans (1).png" alt="" data-aos="zoom-in" data-aos-delay="600">
                <img class="format" src="../img/question.png" alt="" data-aos="zoom-in" data-aos-delay="600">
                <p data-aos="fade-up">Coffepedia adalah sebuah platform komunitas pecinta kopi berbasis web yang telah berdiri sejak 2015 dan memiliki lebih dari 5000 anggota aktif serta mengadakan berbagai macam event menarik.</p>
            </div>
        </div>
    </section>
    <!--                                      END SECTION ONE                                          -->
    
    <!--                                       SECTION TWO                                          -->
    <section id="values" class="sec2">
        <div class="container">
            <div class="col-md-auto">
                <div class="line"></div>
                <h2>Why Choose Coffepedia ? </h2>
                <p>Why should choose coffepedia as your choice?
                    Here are some of its fact.</p>
                <div class="d-flex justify-content-around flex-wrap">
                    <div class="fact" data-aos="fade-right" data-aos-once="true">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        <div class="desc">
                            <h2>Legend</h2>
                            <p>Komunitas Coffepedia berdiri sejak tahun 2015 hingga saat ini masih diurus dengan
                                tersturuktur</p>
                        </div>
                    </div>
                    <div class="fact" data-aos="fade-right" data-aos-once="true">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <div class="desc">
                            <h2>Events</h2>
                            <p>Coffepedia sering mengadakan event rutin menarik baik offline dan online </p>
                        </div>
                    </div>
                    <div class="fact" data-aos="fade-right" data-aos-once="true">
                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                        <div class="desc">
                            <h2>Support</h2>
                            <p>Coffepedia telah didukung oleh berbagai perusahaan coffee serta dari instansi pemerintah
                            </p>
                        </div>
                    </div>
                    <div class="fact" data-aos="fade-right" data-aos-once="true">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <div class="desc">
                            <h2>Member</h2>
                            <p>Komunitas Coffepedia mempunyai lebih dari 5000 member aktif hingga saat ini</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--                                      END SECTION TWO                                          -->

    <!--                                       SECTION THREE                                          -->
    <section id="events" class="sec3">
        <div class="container">
            <div class="line"></div>
            <h2>Info Kegiatan Terupdate Seputar Coffepedia</h2>
            <div class="d-flex justify-content-around flex-wrap" data-aos="fade-up" >
                <div class="info">
                    <img src="../img/pexels-ketut-subiyanto-4350214.jpg" alt="">
                    <div class="desc">
                        <small>
                            MARCH 31, 2020
                            <span>
                                <i class="fa fa-comment" aria-hidden="true"></i>3
                            </span>
                        </small>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quis architecto qui dolorem
                            excepturi consequuntur! </p>
                    </div>
                </div>
                <div class="info">
                    <img src="../img/pexels-helena-lopes-1015568.jpg" alt="">
                    <div class="desc">
                        <small>
                            MARCH 31, 2020
                            <span>
                                <i class="fa fa-comment" aria-hidden="true"></i>3
                            </span>
                        </small>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quis architecto qui dolorem
                            excepturi consequuntur! </p>
                    </div>
                </div>
                <div class="info">
                    <img src="../img/pexels-rodnae-productions-5921980.jpg" alt="">
                    <div class="desc">
                        <small>
                            MARCH 31, 2020
                            <span>
                                <i class="fa fa-comment" aria-hidden="true"></i>3
                            </span>
                        </small>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quis architecto qui dolorem
                            excepturi consequuntur!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--                                      END SECTION THREE                                          -->

    <!--                                       SECTION FOUR                                          -->
    <section class="sec4">
        <div class="container">
            <div class="line"></div>
            <h2>Our Partnership</h2>
            <p>Coffepedia bekerjasama dengan beberapa perusahaan coffeshop lokal maupun non-lokal serta didukung dari
                instansi pemerintah dalam membangun ekosistem komunitas pencinta kopi</p>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 resize" src="../img/sb.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 resize" src="../img/haus.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 resize" src="../img/batavia.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 resize" src="../img/parekraf.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!--                                      END SECTION FOUR                                          -->

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
                        <p>Please Follow us on our social media profile in order to keep update about more information.
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

    <!-- Popup video  -->
    <script src="../js/popup-vid.js"></script>

    <!-- Aos Animate -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 500
        });
    </script>

    <!-- Typed Animate -->
    <script src="../js/typed.js"></script>
    <script>
        var typed = new Typed('.animate', {
            strings: [
                "know about coffee.",
                "connect with people."
            ],
            typeSpeed: 50,
            backSpeed: 50,
            loop: true
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