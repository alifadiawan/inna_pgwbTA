<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Landing page template built with HTML and Bootstrap 4 for presenting training courses, classes, workshops and for convincing visitors to register using the form.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Ekstrakulikuler SMKN 1 Surabaya</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/e4a753eb05.js" crossorigin="anonymous"></script>
    <!-- Favicon  -->
    <link rel="icon" href="images/logosmk 1.png">
</head>

<body data-spy="scroll" data-target=".fixed-top" style="background-color: black">


    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top p-2">

    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Corso</a> -->

    <!-- Image Logo -->
    <a class="navbar-brand logo-image " href="http://www.smkn1-sby.sch.id/"><img src="images/logosmk 1.png"
            alt="alternative"></a>

    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll" href="/">BERANDA <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ route('login') }}">LOGIN <span class="sr-only">(current)</span></a>
            </li>


        </ul>
        <span class="nav-item social-icons">
            <span class="fa-stack">
                <a href="#your-link">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-instagram fw-bold fa-stack-1x"></i>
                </a>
            </span>
            <span class="fa-stack">
                <a href="#your-link">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x"></i>
                </a>
            </span>
        </span>
    </div>
</nav> <!-- end of navbar -->
<!-- end of navigation -->
{{-- <div class="container-fluid mb-5">
    <img  class="mb-5"src="images/cs.jpg" width="100%" alt="">
</div> --}}
<div id="contentainer marketing justify-content-center" style="padding-top: 0">
    <div class="row ">
        <img src="images/cs.jpg" alt="" height="500px" style="object-fit:cover">
    </div>
<div class="container mt-5">
    <div class="row mb-5 justify-content-center">
        <div class="col-11">
            <img src="images/headercs.png" width="100%" alt="">
        </div>
    </div>
    <div class="row justify-content-center" style="padding-top: 20px">
        <div class="col-md-10">
            <div class="mb-3">
             <form action="post" class="bg-white rounded-3">
                <div class="form-group p-5">
                    <label for="exampleFormControlInput1" class="form-label text-secondary fw-bold">Email address</label><br>
                    <label for="exampleFormControlInput1" style="color:#d3ad16 " class="form-label"> Masukkan email yang telah diberikan dari sekolah!</label>
                    <input type="email" class="form-control " style="background-color: lightgrey" id="exampleFormControlInput1" placeholder="name@gmail.com">
                </div>
                <div class="mb-3 p-5">
                    <label for="exampleFormControlTextarea1" class="form-label text-secondary fw-bold">Example textarea</label><br>
                    <label for="exampleFormControlInput1" style="color:#d3ad16 " class="form-label">Beritahu kami keluhan anda.</label>
                    <textarea class="form-control" style="background-color: lightgrey" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mt-4 text-end p-3">
                    <input type="submit" class="btn btn-warning fw-bold" value="Upload">
                    <a href="{{ route('pmr.index') }}" class="btn btn=secondary text-dark fw-bold">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>




 <!-- Footer -->
 <div class="footer mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="footer-col first">
                    <h5>Tentang Web Ekskul</h5>
                    <p class="p-small">Kami memudahkan para siswa dan siswi yang ingin mendaftarkan diri ke
                        ekskul
                        sekolah secara online. Kami juga memberikan sedikit gambaran dan informasi tentang
                        ekstrakulikuler yang diinginkan.</p>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-4">

            </div> <!-- end of col -->
            <div class=" col-md-3 ">
                <div class="footer-col fourth">
                    <h5>Social Media</h5>
                    <p class="p-small">For news & updates follow us</p>
                    <a href="#your-link">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#your-link">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#your-link">
                        <i class="fa fa-whatsapp"></i>
                    </a>
                    <a href="#your-link">
                        <i class="fab fa-instagram"></i>
                    </a>

                </div>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of footer -->
<!-- end of footer -->


<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright © 2023 <a href="http://www.smkn1-sby.sch.id/">Web Sekolah</a> -
                    All
                    rights reserved</p>
                <p class="p-small">Distributed By: <a href="https://www.instagram.com/xprilinxx/"
                        target="_blank">Inna </a> &<a href="https://www.instagram.com/venusvardani/"
                        target="_blank"> varda</a></p>
            </div> <!-- end of col -->
        </div> <!-- enf of row -->
    </div> <!-- end of container -->
</div> <!-- end of copyright -->
<!-- end of copyright -->


<!-- Scripts -->
<script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
<script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
<script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
<script src="js/jquery.countdown.min.js"></script> <!-- The Final Countdown plugin for jQuery -->
<script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
<script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
<script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>
