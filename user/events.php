<?php
    session_start();
    // check login
    if ( !isset($_SESSION["LOGIN"]) ){
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
    <link rel="stylesheet" href="../css/events.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Aos Animate -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Font awesome bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- Logo in tittle website -->
    <link rel="shortcut icon" href="../img/logo.png">

    <title>Events Coffepedia</title>
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

    <!--                                       JUMBOTRON SECTION                                          -->
    <section class="banner-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12 col-sm-8">
                    <small>NEW EVENT</small>
                    <h3>CALLING ALL CRAZY COFFEE LOVERS</h3>
                    <h5> <span class="color"> JAN 21-23,2021,</span>BEKASI,EAST JAVA</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a data-toggle="modal" data-target="#events" class="animate"> EXPLORE MORE </a>
                </div>
            </div>
        </div>
    </section>
    <!--                                    END JUMBOTRON SECTION                                          -->

    <!--                                       SECTION EVENTS                                         -->
    <section class="sec3">
        <div class="container">
            <div class="line"></div>
            <h2>Kegiatan Seputar Coffepedia</h2>
            <div class="flex">
                <div class="info space" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="100">
                    <a href="">
                        <img src="../img/pexels-ketut-subiyanto-4350214.jpg" alt="">
                    </a>
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
                <div class="info space" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="200">
                    <a href="">
                        <img src="../img/pexels-helena-lopes-1015568.jpg" alt="">
                    </a>
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
                <div class="info space" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="300">
                    <a href="">
                        <img src="../img/pexels-rodnae-productions-5921980.jpg" alt="">
                    </a>
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
                <div class="info" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="400">
                    <a href="">
                        <img src="../img/pexels-ketut-subiyanto-4350214.jpg" alt="">
                    </a>
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
                <div class="info" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="500">
                    <a href="">
                        <img src="../img/pexels-ketut-subiyanto-4350214.jpg" alt="">
                    </a>
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
                <div class="info rmv" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="600">
                    <a href="">
                        <img src="../img/pexels-ketut-subiyanto-4350214.jpg" alt="">
                    </a>
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
            </div>
        </div>
    </section>
    <!--                                      END SECTION EVENTS                                         -->

    <!-- PAGINATION  -->

    <nav aria-label="Page navigation example">
        <ul class="pagination pagination-md justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">></a>
            </li>
        </ul>
    </nav>

    <!-- END OF PAGINATION  -->

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

    <!-- Modal events -->

    <!-- Modal -->
    <div class="modal fade" id="events" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Announcement</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <h6>This event will be open register on Jan 15-20</h6>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>

    <!-- End Modal events -->


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