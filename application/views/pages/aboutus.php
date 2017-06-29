<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" xml:lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="caydeesoft.org">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href=""<?=site_url("assets/"); ?>ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href=""<?=site_url("assets/"); ?>ico/favicon.ico">

    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,900,900italic,700italic,400italic%7CFjalla+One' rel='stylesheet' type='text/css'>

    <!-- Icon-Font -->
    <link rel="stylesheet" href=""<?=site_url("assets/"); ?>font-awesome/font-awesome/css/font-awesome.min.css" type="text/css">
    <!--[if IE 7]>
    <link rel="stylesheet" href=""<?=site_url("assets/"); ?>font-awesome/font-awesome/css/font-awesome-ie7.min.css" type="text/css">
    <![endif]-->

    <link rel="stylesheet" href="<?=site_url("assets/"); ?>bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?=site_url("assets/"); ?>owl-carousel/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?=site_url("assets/"); ?>lightbox/css/lightbox.css" type="text/css">
    <link rel="stylesheet" href="<?=site_url("assets/"); ?>styles/main.css" type="text/css">

    <title><?=@$title; ?></title>

    <script type="text/javascript" src="<?=site_url("assets/"); ?>js/modernizr.min.js"></script>
    <script type="text/javascript" src="<?=site_url("assets/"); ?>pace/pace.min.js"></script>
</head>

<body>
<div id="page-loader">
    <div class="loader-square loader-square-1">
        <div class="loader-square-content">
            <div class="loader-square-inner bg-pattern dark-screen"></div>
        </div>
    </div>
    <div class="loader-square loader-square-2">
        <div class="loader-square-content">
            <div class="loader-square-inner bg-pattern dark-screen"></div>
        </div>
    </div>
    <div class="loader-square loader-square-3">
        <div class="loader-square-content">
            <div class="loader-square-inner bg-pattern dark-screen"></div>
        </div>
    </div>
    <div class="loader-square loader-square-4">
        <div class="loader-square-content">
            <div class="loader-square-inner bg-pattern dark-screen"></div>
        </div>
    </div>
    <div class="loader-square loader-square-5">
        <div class="loader-square-content">
            <div class="loader-square-inner bg-pattern dark-screen"></div>
        </div>
    </div>
    <div class="loader-square loader-square-6">
        <div class="loader-square-content">
            <div class="loader-square-inner bg-pattern dark-screen"></div>
        </div>
    </div>
    <div class="loader-square loader-square-7">
        <div class="loader-square-content">
            <div class="loader-square-inner bg-pattern dark-screen"></div>
        </div>
    </div>
    <div class="loader-square loader-square-8">
        <div class="loader-square-content">
            <div class="loader-square-inner bg-pattern dark-screen"></div>
        </div>
    </div>
    <div class="loader-square loader-square-9">
        <div class="loader-square-content">
            <div class="loader-square-inner bg-pattern dark-screen"></div>
        </div>
    </div>
    <div class="loader-container">
        <div class="loader-content">
            <img class="loader-logo" alt="Smarty" src="images/logo2.png">
        </div>
    </div><!-- .loader-container -->
    <div class="loader-footer">
        <p>
            Copyright &copy; 2014 <span class="text-white">ALL ABOUT FASHION</span>.<br>All
            Rights Reserved.
        </p>
    </div>
</div><!-- #page-loader -->

<?php $this->view("includes/sidebar"); ?>

    <section class="single-page">
        <div class="section-content bg-pattern dark-screen">
            <div class="section-page container">
                <div class="row row-big">
                    <div class="col-xxl-6 col-lg-12 col-md-6 content-column">
                        <article>
                            <h1 class="no-top-margin">About Us</h1>
                            <p class="paragragh-bg">
                            <?=$about[0]->aboutus; ?>
                            </p>
                            <a href="<?=site_url('contact'); ?>" class="button-big">Contact Us</a>
                        </article>
                    </div><!-- .col-xxl-6 -->
                    <div class="col-xxl-6 col-lg-12 col-md-6 content-column">
                        <img class="img-full" alt="about us" src="<?=site_url("assets/"); ?>images/aboutus.jpg">
                    </div><!-- .col-xxl-6 -->
                </div><!-- .row -->
            </div><!-- .section-page -->
        </div><!-- .section-content -->
    </section>

</div><!-- #all -->

<script type="text/javascript" src="<?=site_url("assets/"); ?>js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="<?=site_url("assets/"); ?>bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=site_url("assets/"); ?>owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?=site_url("assets/"); ?>lightbox/js/lightbox.min.js"></script>
<script type="text/javascript" src="<?=site_url("assets/"); ?>js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="<?=site_url("assets/"); ?>js/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="<?=site_url("assets/"); ?>js/custom.js"></script>
</body>
</html>
