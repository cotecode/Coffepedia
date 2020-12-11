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

    <!-- Sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Font awesome bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- Logo in tittle website -->
    <link rel="shortcut icon" href="../img/logo.png">

    <title>Contact Coffepedia</title>
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

    <!--                                  SECTION CONTACT HEADER                                          -->
    <div class="contact">
        <div class="container">
            <h1>Contact Us</h1>
        </div>
    </div>
    <!--                               END SECTION CONTACT HEADER                                          -->

    <!--                                       FORM SECTION                                          -->
    <section class="form-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 order-md-last d-flex align-items-stretch">
                    <div class="contact-wrap w-100 p-md-5 p-4">
                        <h1 class="mb-4">Get in touch</h1>
                        <div class="mb-4">
                            We'll get back to you as soon as we can
                        </div>
                        <form method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="name">Full Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="email">Email Address</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="subject">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="#">Message</label>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="4"
                                            placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Send Message" class="btn btn-primary" name="SEND">
                                        <div class="submitting"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--                                      END FORM SECTION                                          -->

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

<!-- Logic Button -->
<?php

    require '../function.php';

    if( isset($_POST["SEND"]) ){
        if( SEND($_POST) > 0 ){
            echo "<script>
                swal('Thanks!', 'Your message was delivered !', 'success')
            </script>";
        }
    }

?>