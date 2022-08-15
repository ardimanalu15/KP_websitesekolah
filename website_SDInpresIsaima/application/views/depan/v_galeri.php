<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gallery Photo</title>
    <link rel="shorcut icon" href="<?php echo base_url() . 'assets/img/logo-toga.png' ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/font-awesome.min.css' ?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/simple-line-icons.css' ?>">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/magnific-popup.css' ?>">
    <!-- Image Hover CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/normalize.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/set2.css' ?>" />

    <!-- Masonry Gallery -->
    <link href="<?php echo base_url() . 'assets/css/animated-masonry-gallery.css' ?>" rel="stylesheet" type="text/css" />
    <!-- Main CSS -->
    <link href="<?php echo base_url() . 'assets/css/style.css' ?>" rel="stylesheet">

</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="header-topbar" style="background-color: #15477A;">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <div class="header-top_list">
                            <span class="icon-phone"></span>0813 4483 6083
                        </div>
                        <div class="header-top_list">
                            <span class="icon-envelope-open"></span>Sdinpresisaima@gmail.com
                        </div>
                        <div class="header-top_list">
                            <span class="icon-location-pin"></span>Wamena, Jayawijaya, Papua, INA. 99511
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3" id="contact">
                    <div class="header-top_login mr-sm-3">
                        <a href="<?php echo site_url('contact'); ?>">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header style="padding: 30px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="brand">
                        <img src="assets/img/logo-toga.png" alt="" style="margin-right: 20px; width: 64px; height:80px">
                        <div class="brand-name">
                            <h1 style=" margin:0px 0px 8px 0px;font-size: 40px; color: #15477A; text-transform: uppercase; font-family: Raleway, 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">SEKOLAH DASAR INPRES ISAIMA</h1>
                            <h3 style="font-size: 18px; text-transform: uppercase; letter-spacing: 1px; color: #888888; font-family: Raleway, 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Wamena, Kab. Jayawijaya, Papua</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div data-toggle="affix" style="border-bottom:solid 1px #f2f2f2; background-color: #15477A; margin:-5px">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded" style="background-color: #15477A;">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a style="color: #fff;" href="<?php echo site_url(''); ?>" class="navbar-brand nav-brand2">Sd Inpres Isaima</a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url(''); ?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('about'); ?>">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('guru'); ?>">Guru</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('siswa'); ?>">Siswa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog'); ?>">Artikel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman'); ?>">Pengumuman</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('agenda'); ?>">Agenda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri'); ?>">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('contact'); ?>">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section>
    </section>
    <!--//END HEADER -->
    <!--============================= Gallery =============================-->
    <div class="gallery-wrap">
        <div class="container">
            <!-- Style 2 -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="gallery-style">Gallery Photo</h3>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-12">
                    <div id="gallery">
                        <div id="gallery-content">
                            <div id="gallery-content-center">
                                <?php foreach ($all_galeri->result() as $row) : ?>
                                    <a href="<?php echo base_url() . 'assets/images/' . $row->galeri_gambar; ?>" class="image-link2">
                                        <img src="<?php echo base_url() . 'assets/images/' . $row->galeri_gambar; ?>" class="all img-fluid" alt="#" />
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//End Style 2 -->

        </div>
    </div>
    <!--//End Gallery -->
    <!--============================= FOOTER =============================-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="foot-logo">
                        <a href="<?php echo site_url(); ?>">
                            <img src="<?php echo base_url() . 'assets/img/logo-toga.png' ?>" class="img-fluid" alt="footer_logo"> Sd Inpres Isaima
                        </a>
                        <p><?php echo date('Y'); ?> © copyright by <a href="#" target="_blank">Ardi Manalu</a>. <br>All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Menu Utama</h3>
                        <ul>
                            <li><a href="<?php echo site_url(); ?>">Home</a></li>
                            <li><a href="<?php echo site_url('about'); ?>">About</a></li>
                            <li><a href="<?php echo site_url('artikel'); ?>">Artikel </a></li>
                            <li><a href="<?php echo site_url('galeri'); ?>">Gallery</a></li>
                            <li><a href="<?php echo site_url('contact'); ?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Akademik</h3>
                        <ul>
                            <li><a href="<?php echo site_url('guru'); ?>">Guru</a></li>
                            <li><a href="<?php echo site_url('siswa'); ?>">Siswa </a></li>
                            <li><a href="<?php echo site_url('pengumuman'); ?>">Pengumuman</a></li>
                            <li><a href="<?php echo site_url('agenda'); ?>">Agenda</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat: </span> Wamena, Jayawijaya, Papua, INA. 99511</p>
                        <p>Email : Sdinpresisaima@gmail.com
                            <br> Phone : +62 813 4483 6083
                        </p>
                        <ul class="footer-social-icons">
                            <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram fa-in" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->
    <!-- jQuery, Bootstrap JS. -->
    <script src="<?php echo base_url() . 'assets/js/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/tether.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>"></script>
    <!-- Plugins -->
    <script src="<?php echo base_url() . 'assets/js/slick.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/waypoints.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/counterup.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/owl.carousel.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/validate.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/tweetie.min.js' ?>"></script>
    <!-- Subscribe -->
    <script src="<?php echo base_url() . 'assets/js/subscribe.js' ?>"></script>

    <script src="<?php echo base_url() . 'assets/js/jquery-ui-1.10.4.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/jquery.isotope.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/animated-masonry-gallery.js' ?>"></script>
    <!-- Magnific popup JS -->
    <script src="<?php echo base_url() . 'assets/js/jquery.magnific-popup.js' ?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url() . 'assets/js/script.js' ?>"></script>

</body>

</html>