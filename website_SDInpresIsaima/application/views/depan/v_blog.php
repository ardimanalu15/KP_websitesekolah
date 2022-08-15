<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Artikel</title>
    <link rel="shorcut icon" href="<?php echo base_url() . 'assets/img/logo-toga.png' ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/font-awesome.min.css' ?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/simple-line-icons.css' ?>">
    <!-- Owl Carousel -->
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
                <div class="col-xs-6 col-sm-4 col-md-3">
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
    <div data-toggle="affix" style="border-bottom:solid 1px #f2f2f2; background-color: #15477A; margin:-5px;">
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
    <!--============================= BLOG =============================-->
    <section class="blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php echo $this->session->flashdata('msg'); ?>
                    <?php foreach ($data->result() as $row) : ?>
                        <div class="blog-single-item">
                            <div class="blog-img_block">
                                <img src="<?php echo base_url() . 'assets/images/' . $row->tulisan_gambar; ?>" class="img-fluid" alt="blog-img">
                            </div>
                            <div class="blog-tiltle_block">
                                <h4><a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>"><?php echo $row->tulisan_judul; ?></a></h4>
                                <span><?php echo $row->tanggal; ?></span>
                                <h6> <a href="#"><i class="fa fa-user" aria-hidden="true"></i><span><?php echo $row->tulisan_author; ?></span> </a> | <a href="#"><i class="fa fa-tags" aria-hidden="true"></i><span><?php echo $row->tulisan_kategori_nama; ?></span></a></h6>
                                <?php echo limit_words($row->tulisan_isi, 10) . '...'; ?>
                                <div class="blog-icons">
                                    <div class="blog-share_block">
                                        <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <nav>
                        <?php error_reporting(0);
                        echo $page; ?>
                    </nav>
                </div>
                <div class="col-md-4">
                    <form action="<?php echo site_url('blog/search'); ?>" method="get">
                        <input type="text" name="keyword" placeholder="Search" class="blog-search" required>
                        <button type="submit" class="btn btn-warning btn-blogsearch">SEARCH</button>
                    </form>
                    <div class="blog-category_block">
                        <h3>Kategori</h3>
                        <ul>
                            <?php foreach ($category->result() as $row) : ?>
                                <li><a href="<?php echo site_url('blog/kategori/' . str_replace(" ", "-", $row->kategori_nama)); ?>"><?php echo $row->kategori_nama; ?><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="blog-featured_post">
                        <h3>Populer</h3>
                        <?php foreach ($populer->result() as $row) : ?>
                            <div class="blog-featured-img_block">
                                <img width="35%" src="<?php echo base_url() . 'assets/images/' . $row->tulisan_gambar; ?>" class="img-fluid" alt="blog-featured-img">
                                <h5><a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>"><?php echo limit_words($row->tulisan_judul, 3) . '...'; ?></a></h5>
                                <p><?php echo limit_words($row->tulisan_isi, 5) . '...'; ?></p>
                            </div>
                            <hr>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--//END BLOG -->
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
    <script src="<?php echo base_url() . 'assets/js/owl.carousel.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/validate.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/tweetie.min.js' ?>"></script>
    <!-- Subscribe -->
    <script src="<?php echo base_url() . 'assets/js/subscribe.js' ?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url() . 'assets/js/script.js' ?>"></script>
</body>

</html>