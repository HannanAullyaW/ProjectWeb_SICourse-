<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- boostrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/assets/templateweb/css/animate.css">

    <link rel="stylesheet" href="/assets/templateweb/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/templateweb/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/templateweb/css/magnific-popup.css">

    <link rel="stylesheet" href="/assets/templateweb/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/assets/templateweb/css/jquery.timepicker.css">


    <link rel="stylesheet" href="/assets/templateweb/css/flaticon.css">
    <link rel="stylesheet" href="/assets/templateweb/css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">

        <div class="container">
            <a class="navbar-brand" href="/dashboard/beranda"><span>Course</span> Us!</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span>
                <div class="navbar-toggler-icon"></div>
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/dashboard/beranda" class="nav-link">Beranda</a></li>
                    <li class="nav-item active"><a href="/dashboard/pelajaran" class="nav-link">Pelajaran</a></li>
                    <li class="nav-item active"><a href="/dashboard/pengajar" class="nav-link">Pengajar</a></li>
                    <li class="nav-item" class="ml-4"><a href="/logout" class="nav-link btn btn-warning">Keluar</a></li>
                </ul>
            </div>
            <!-- </div> -->
    </nav>
    <!-- </div> -->
    <!-- END nav -->

    <!-- renderSection    -->
    <?= $this->renderSection('content'); ?>


    <!-- Footer -->
    <footer class="ftco-footer ftco-no-pt mb-1">
        <div class="container">
            <div class="row ">
                <div class="col-md pt-3">
                    <div class="ftco-footer-widget">
                        <h2 class="ftco-heading-2">Tentang Kami</h2>
                        <p>Pahami materi lebih mudah bersama kami, raih mimpi lewat prestasi!</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                            <li class="ftco-animate"><a href="https://twitter.com/Javaboi7"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.facebook.com/profile.php?id=100009444702586"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/rendy.lp_/"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md pt-3 text-center">
                    <div class="ftco-footer-widget">
                        <h2 class="ftco-heading-2 "><a href="/dashboard/pelajaran">Pelajaran</a></h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">TWK</a></li>
                            <li><a href="#" class="py-2 d-block">TIU</a></li>
                            <li><a href="#" class="py-2 d-block">TKP</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pt-3">
                    <div class="ftco-footer-widget">
                        <h2 class="ftco-heading-2"><a href="/hubungikami">Info lanjut</a></h2>
                        <div class="block-23">
                            <ul>
                                <li><a href="https://goo.gl/maps/BDLiwaz15hFPaAWQA"><span class="icon fa fa-map-marker"></span><span class="text">Wisma Istiqomah, Bumi Manti 4</span></a></li>
                                <li><a href="https://wa.me/+6288269638116"><span class="icon fa fa-phone"></span><span class="text">+62-882-6963-8116</span></a></li>
                                <li><a href="https://satriasapta48@gmail.com"><span class="icon fa fa-paper-plane"></span><span class="text">satriasapta48@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">

                    <p>
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | by Huaweb Team<i class="fa fa-heart" aria-hidden="true"></i>
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="/assets/templateweb/js/jquery.min.js"></script>
    <script src="/assets/templateweb/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/assets/templateweb/js/popper.min.js"></script>
    <script src="/assets/templateweb/js/bootstrap.min.js"></script>
    <script src="/assets/templateweb/js/jquery.easing.1.3.js"></script>
    <script src="/assets/templateweb/js/jquery.waypoints.min.js"></script>
    <script src="/assets/templateweb/js/jquery.stellar.min.js"></script>
    <script src="/assets/templateweb/js/owl.carousel.min.js"></script>
    <script src="/assets/templateweb/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/templateweb/js/jquery.animateNumber.min.js"></script>
    <script src="/assets/templateweb/js/bootstrap-datepicker.js"></script>
    <script src="/assets/templateweb/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="/assets/templateweb/js/google-map.js"></script>
    <script src="/assets/templateweb/js/main.js"></script>

</body>

</html>