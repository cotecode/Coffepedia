<?php
    session_start();

    if( isset($_SESSION["LOGIN"]) ){
        header("Location: ./user/home");
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
    <link rel="stylesheet" href="css/auth.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Aos Animate -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <!-- Font awesome bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- Logo in tittle website -->
    <link rel="shortcut icon" href="img/logo.png">

    <title>Coffeepedia</title>
</head>

<body>
    <!--                                          HEADER SECTION                                          -->
    <header>
        <div class="navbar-wrapper">
            <nav class="navbar container navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index">
                    <img src="img/logo.png" alt="" style="width: 50px;"> Coffepedia
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link signup-button mb-1" href="register">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link login-button mb-1" href="login">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--                                       END HEADER SECTION                                          -->

    <!--                                          REGISTER SECTION                                          -->
    <section class="register bg-light">
        <div class="container ">
            <h1 class="mb-4"> <span class="color"> Create </span> Your Account</h1>
            <div class="row">
                <div class="col-md-6 order-md-last text-center right">
                    <img class="img-fluid" src="img/undraw_Terms_re_6ak4.png" alt="">
                </div>
                <div class="col-lg-8 col-md-12 order-md-last left">
                    <div class="contact-wrap w-100 p-md-5 p-4">
                        <form method="POST" onSubmit="return validasi(this);">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="name">Full Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                                            required>
                                        <small> <i> Masukkan nama asli anda, nama akan dipakai pada saat event</i></small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="email">Email Address</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Email" required>
                                        <small> <i> Gunakan email aktif anda</i></small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="password">Password</label>
                                        <input id="psw-input" type="password" class="form-control" name="password" placeholder="Password" required>
                                        <div id="pswmeter"></div>
                                        <small><i> Gunakan minimal 8 karakter dengan kombinasi huruf besar, kecil dan angka</i></small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="cnf_password">Confirm Password</label>
                                        <input type="password" class="form-control" name="cnf_password" id="cnf_password"
                                            placeholder="Password" required>
                                        <small> <i>Ulangi password di atas sekali lagi</i> </small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1"> I agree to the <a href="https://policies.google.com/terms" style="color:#000;text-decoration:underline" target="_blank"> terms of service</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="register">REGISTER</button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p> Sudah punya akun? <a href="login">Masuk Sekarang</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--                                       END REGISTER SECTION                                          -->

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
    
    <!-- Aos Animate -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 500
        });
    </script>

    <!-- Passtrength checker -->
    <script src="js/pswmeter.min.js"></script>
    
    <script>
        const myPassMeter = passwordStrengthMeter({
            containerElement: '#pswmeter',
            passwordInput: '#psw-input',
            showMessage: true,
            messageContainer: '#pswmeter-message',
            messagesList: [
                'Write your password...',
                'To Weak!',
                'Weak',
                'That is better',
                'Perfect !'
            ],
            height: 3,
            borderRadius: 5,
            pswMinLength: 8
        });
    </script>

    <!-- Check password at least 8 char -->
    <script>

        function validasi(form){
            if(form.password.value.length < 8){
                swal("Warning", "Password at least 8 character","info");
                return false;
            }
        }
    
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

<!-- logic button -->
<?php

require 'function.php';

if( isset($_POST["register"]) ){

    if( register($_POST) > 0 ){
        echo "<script>
                swal('Good job!', 'Your Account has been created !', 'success')
            </script>";
    }else {
        echo mysqli_error($conn);
    }

}

?>