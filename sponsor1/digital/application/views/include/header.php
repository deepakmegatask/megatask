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
                                        <a href="<?php echo base_url()?>" class="navbar-brand"><img id="logo" src="<?php echo base_url()?>assets/img/logos/logo-inner.png" alt="logo"></a>
                                        <!-- end logo -->
                                    </div>

                                    <div class="navbar-toggler"></div>

                                    <!-- menu area -->
                                    <ul class="navbar-nav ms-auto" id="nav" style="display: none;">
                                        <li><a href="<?php echo base_url()?>">Home</a></li>
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

          <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section top-position bg-primary">
            <div class="container z-index-1 position-relative">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1><?php echo $heading?></h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="mb-0 ps-0">
                            <li><a href="<?php echo base_url()?>">Home</a></li>
                            <li><a class="dot-divider"></a></li>
                            <li><a href="<?php echo base_url().$slug;?>"><?php echo $heading?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <img src="<?php echo base_url()?>assets/img/banner/page-title2.png" class="position-absolute top-0 start-0" alt="...">
            <img src="<?php echo base_url()?>assets/img/banner/page-title1.png" class="position-absolute bottom-0 end-0" alt="...">
            <div class="home_bubble">
                <div class="square-shape2"></div>
                <div class="bubble b_three"></div>
                <div class="square-shape1 d-none d-sm-block"></div>
                <div class="bubble b_six d-none d-sm-block"></div>
            </div>
        </section>