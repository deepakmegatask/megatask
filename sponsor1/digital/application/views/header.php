<!DOCTYPE html>
<html lang="en">
<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Chitrakoot Web">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Digital Marketing Agency Template">
    <meta name="description" content="SEO - Digital Marketing Agency Template">

    <!-- title  -->
    <title><?php echo (isset($title))?$title." - Digi Web Marketing":'Digi Web Marketing'; ?></title>

    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logos/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo base_url()?>assets/img/logos/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url()?>assets/img/logos/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url()?>assets/img/logos/apple-touch-icon-114x114.png">

    <!-- plugins -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/plugins.css">

    <!-- search css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/search/search.css">

    <!-- quform css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/quform/css/base.css">

    <!-- theme core css -->
    <link href="<?php echo base_url()?>assets/css/styles.css" rel="stylesheet">

</head>

<body>

    <!-- PAGE LOADING
    ================================================== -->
   <!--  <div id="preloader"></div> -->

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        <!-- HEADER
        ================================================== -->
        <header class="header-style1 menu_area-light">

            <div class="navbar-default">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12">
                            <div class="menu_area">
                                <nav class="navbar navbar-expand-lg navbar-light p-0">

                                    <div class="navbar-header navbar-header-custom">
                                        <!-- start logo -->
                                        <a href="<?php echo base_url()?>" class="navbar-brand"><img id="logo" src="<?php echo base_url()?>assets/img/logos/logo-inner.svg" alt="logo"></a>
                                        <!-- end logo -->
                                    </div>

                                    <div class="navbar-toggler"></div>

                                    <!-- menu area -->
                                    <ul class="navbar-nav ms-auto" id="nav" style="display: none;">
                                        <li><a href="index.html">Home</a></li>
                                        <li>
                                            <a href="#!">Our Company</a>
                                            <ul>
                                                <li><a href="<?php echo base_url()?>about">About Us</a></li>
                                                <li><a href="<?php echo base_url()?>team">Team</a></li>
                                                <li><a href="<?php echo base_url()?>testimonials">Testimonials</a></li>
                                                <li><a href="<?php echo base_url()?>faq">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#!">Our Services</a>
                                            <ul>
                                                <li><a href="<?php echo base_url()?>seo">Search Engine Optimization</a></li>
                                                <li><a href="<?php echo base_url()?>sem">Search Engine Marketing</a></li>
                                                <li><a href="<?php echo base_url()?>ppc">Pay-Per-Click</a></li>
                                                <li><a href="<?php echo base_url()?>smo">Social Media Optimization</a></li>
                                                <li><a href="<?php echo base_url()?>smm">Social Media Marketing</a></li>
                                                <li><a href="<?php echo base_url()?>email">Email Marketing</a></li>
                                                <li><a href="<?php echo base_url()?>content">Content Writing</a></li>
                                                <li><a href="<?php echo base_url()?>google">Google Analytics Services</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url()?>contact">Contacts</a></li>
                                    </ul>
                                    <!-- end menu area -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>



         <div class="main-banner bg-primary top-position position-relative">
            <div class="container">

                <div class="row">

                    <!-- left banner text -->
                    <div class="col-lg-6">
                        <div class="header-text w-md-75 w-lg-100 pb-5 pb-lg-0">
                            <h1 class="wow fadeInUp text-white mb-4 display-lg-8 w-xl-90" data-wow-delay=".1s">Manage your business strategy with The Digi Web Digital Agency</h1>
                            <p class="mb-lg-2-0 w-90 w-md-80 opacity9 wow fadeInUp text-white" data-wow-delay=".2s">Our passion to work hard and deliver excellent results. It could solve the needs of your customers and develop innovation.</p>
                            <div class="wow fadeInUp" data-wow-delay=".4s"><a href="<?php echo base_url()?>about" class="butn white me-2 align-middle"><span>Get Started</span></a>
                                <!-- <a class="popup-youtube" href="watch.html?v=lB6Ds9yz71I">
                                    <span class="btn-play-theme video_btn align-middle"><i class="fa fa-play"></i></span>
                                </a> --></div>
                        </div>
                    </div>
                    <!-- end banner text -->

                    <!-- right image banner -->
                    <div class="col-lg-6 text-center text-lg-end position-relative">
                        <div class="banner-img">
                            <img src="<?php echo base_url()?>assets/img/banner/banner-01.svg" alt="...">
                        </div>
                    </div>
                    <!-- end right image banner -->

                </div>

            </div>
            <div class="position-absolute top-0 start-0">
                <img src="<?php echo base_url()?>assets/img/bg/bg-07.png" alt="...">
            </div>
            <div class="position-absolute top-0 end-0">
                <img src="<?php echo base_url()?>assets/img/bg/bg-08.png" alt="...">
            </div>
            <div class="home_bubble">
                <div class="square-shape2"></div>
                <div class="bubble b_three"></div>
                <div class="square-shape1 d-none d-sm-block"></div>
                <div class="bubble b_six d-none d-sm-block"></div>
            </div>

            <!-- shape area -->
            <div class="header-shape d-none d-sm-block">
                <img src="<?php echo base_url()?>assets/img/bg/bg-04.png" class="img-fluid w-100" alt="...">
            </div>
            <!-- end shape area -->

        </div>