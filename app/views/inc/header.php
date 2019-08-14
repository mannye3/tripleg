<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo SITENAME; ?></title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo URLROOT; ?>assets/images/favicon.ico">
    
    <!-- CSS 
    ========================= -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>assets/css/bootstrap.min.css">
    
    <!-- Fonts CSS -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>assets/css/material-design-iconic-font.min.css">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>assets/css/style.css">
    
    <!-- Modernizer JS -->
    <script src="<?php echo URLROOT; ?>assets/js/vendor/modernizr-3.6.0.min.js"></script>
</head>
<!-- Mirrored from www.vasterad.com/themes/findeo/agencies-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Dec 2018 11:44:36 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title><?php echo SITENAME; ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/colors/main.css" id="colors">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link href="<?php echo URLROOT; ?>/css/dropzone.css" rel="stylesheet" type="text/css">
<link href="<?php echo URLROOT; ?>/images/icon.jpg" type="img/x-icon" rel="shortcut icon">






</head>

<body>

<!-- Main Wrapper Start -->
<div class="main-wrapper">
   
    <header class="header-area">
        <!-- header-top-area -->
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                       
                        <!-- top-contact-info -->
                        <div class="top-contact-info">
                            <ul>
                                <li><a href="#"><i class="zmdi zmdi-phone"></i> +98 558 547 589</a></li>
                                <li><a href="#"><i class="zmdi zmdi-email"></i> education@info.com</a></li>
                            </ul>
                        </div><!--// top-contact-info -->
                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="top-info-right">
                           
                            <!-- top-social -->
                            <div class="top-social">
                                <ul>
                                    <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
                                </ul>
                            </div><!--// top-social -->
                            
                            <!-- login-and-register -->
                            <div class="login-and-register">
                                <ul>
                                    <li><a href="<?php echo URLROOT; ?>users/login">Login</a></li>
                                    <li><a href="<?php echo URLROOT; ?>users/register">Register</a></li>
                                </ul>
                            </div><!--// login-and-register -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div><!--// header-top-area -->
        
        <div class="header-bottom-area header-sticky header-sticky">
            <div class="container">
                <?php require APPROOT . '/views/inc/navbar.php'; ?>
            </div>
        </div>
        
    </header>
