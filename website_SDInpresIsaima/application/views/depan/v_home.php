<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SD Inpres Isaima</title>
    <link rel="shorcut icon" href="<?php echo base_url() . 'assets/img/logo-toga.png' ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/font-awesome.min.css' ?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/simple-line-icons.css' ?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/slick.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/slick-theme.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/owl.carousel.min.css' ?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url() . 'assets/css/style.css' ?>" rel="stylesheet">
    <?php
    function limit_words($string, $word_limit)
    {
        $words = explode(" ", $string);
        return implode(" ", array_splice($words, 0, $word_limit));
    }
    ?>
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
                        <img src="assets/img/logo-toga.png" alt="" style="margin-right: 20px;">
                        <div class="brand-name">
                            <h1>SEKOLAH DASAR INPRES ISAIMA</h1>
                            <h3>Wamena, Kab. Jayawijaya, Papua</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div data-toggle="affix" style="background-color: #15477a;margin:-5px">
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
                                    <a class="nav-link" href="<?php echo site_url(''); ?>"> Home</a>
                                </li>
                                <li class=" nav-item">
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
        <div class="slider_img layout_two">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block" style=";" src="<?php echo base_url() . 'assets/images/sekolah2.jpg' ?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="<?php echo base_url() . 'assets/images/sekolah2.jpg' ?>" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="<?php echo base_url() . 'assets/images/sekolah2.jpg' ?>" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!--//END HEADER -->
    <!--============================= ABOUT =============================-->
    <section class="clearfix about about-style2">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 style="margin-bottom: 50px;">SEKOLAH DASAR INPRES ISAIMA</h2>
                    <p>Sekolah Dasar Inpres Isaima Adalah Sekolah yang memiliki Status Negeri yang terdapat di Wamena provinsi Papua, Lokasinya berada di Kecamatan Usilimo, Kabupaten Jayawijaya. Sekolah Dasar Inpres Isaima didirikan pada tahun 1982/09/16.</p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url() . 'assets/images/welcome.jpg' ?>" class="img-fluid about-img" alt="#">
                </div>
            </div>
        </div>
    </section>
    <!--//END ABOUT -->
    <!--============================= OUR COURSES =============================-->
    <section class="our_courses">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Artikel Terbaru</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($berita->result() as $row) : ?>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="courses_box mb-4">
                            <div class="course-img-wrap">
                                <img src="<?php echo base_url() . 'assets/images/' . $row->tulisan_gambar; ?>" class="img-fluid" alt="courses-img">
                            </div>
                            <!-- // end .course-img-wrap -->
                            <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>" class="course-box-content">
                                <h3 style="text-align:center;"><?php echo $row->tulisan_judul; ?></h3>
                                <p><?php echo limit_words($row->tulisan_isi, 5) . '...'; ?></p>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div> <br>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="<?php echo site_url('artikel'); ?>" class="btn btn-default btn-courses">View More</a>
                </div>
            </div>
        </div>
    </section>
    <!--//END OUR COURSES -->
    <!--============================= EVENTS =============================-->
    <section class="event">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>PENGUMUMAN</h2>
                    <div class="event-img2">
                        <?php foreach ($pengumuman->result() as $row) : ?>
                            <div class="row">
                                <div class="col-sm-2"> <img src="<?php echo base_url() . 'assets/images/announcement-icon.png' ?>" class="img-fluid" alt="event-img"></div><!-- // end .col-sm-3 -->
                                <div class="col-sm-9">
                                    <h3><a href="<?php echo site_url('pengumuman'); ?>"><?php echo $row->pengumuman_judul; ?></a></h3>
                                    <span><?php echo $row->tanggal; ?></span>
                                    <p><?php echo limit_words($row->pengumuman_deskripsi, 10) . '...'; ?></p>

                                </div><!-- // end .col-sm-7 -->
                            </div><!-- // end .row -->
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="eventt">
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <h2>AGENDA</h2>
                    <div class="col-md-12">
                        <?php foreach ($agenda->result() as $row) : ?>
                            <div class="event_date">
                                <div class="event-date-wrap">
                                    <p><?php echo date("d", strtotime($row->agenda_tanggal)); ?></p>
                                    <span><?php echo date("M. y", strtotime($row->agenda_tanggal)); ?></span>
                                </div>
                            </div>
                            <div class="date-description">
                                <h3><a href="<?php echo site_url('agenda'); ?>"><?php echo $row->agenda_nama; ?></a></h3>
                                <p><?php echo limit_words($row->agenda_deskripsi, 10) . '...'; ?></p>
                                <hr class="event_line">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--//END EVENTS -->
    <!--============================= DETAILED CHART =============================-->
    <!-- <div class="detailed_chart">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom">
                    <div class="chart-img">
                        <img src="<?php echo base_url() . 'assets/images/chart-icon_1.png' ?>" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_guru; ?></span> Guru
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
                    <div class="chart-img">
                        <img src="<?php echo base_url() . 'assets/images/chart-icon_2.png' ?>" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_siswa; ?></span> Siswa
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 chart_top">
                    <div class="chart-img">
                        <img src="<?php echo base_url() . 'assets/images/chart-icon_3.png' ?>" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_files; ?></span> Download
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="chart-img">
                        <img src="<?php echo base_url() . 'assets/images/chart-icon_4.png' ?>" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_agenda; ?></span> Agenda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
    <!--//END DETAILED CHART -->
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
    <!-- Script JS -->
    <script src="<?php echo base_url() . 'assets/js/script.js' ?>"></script>
</body>

</html>