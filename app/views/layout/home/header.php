<!DOCTYPE HTML>
<html>
<head>
    <title>Footwear</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/assets_home/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/assets_home/css/icomoon.css">
    <!-- Ion Icon Fonts-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/assets_home/css/ionicons.min.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/assets_home/css/bootstrap.min.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/assets_home/css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/assets_home/css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/assets_home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/assets_home/css/owl.theme.default.min.css">

    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/assets_home/css/bootstrap-datepicker.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/assets_home/fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/assets_home/css/style.css">

</head>
<body>

<div class="colorlib-loader"></div>

<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-md-9">
                        <div id="colorlib-logo"><a href="<?php echo URLROOT; ?>">Footwear</a></div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <form action="<?php echo URLROOT; ?>/product/search" class="search-wrap" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control search" placeholder="Search" name="search">
                                <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-left menu-1">
                        <ul>
                            <li class="active float-left"><a href="<?php echo URLROOT; ?>">Home</a></li>
                            <li class="float-left"><a href="<?php echo URLROOT; ?>/product/ListProducts/1">All products</a></li>
                            <li class="float-left"><a href="#">About</a></li>
                            <?php if (isset($_SESSION['username'])): ?>
                                <li class="float-right btn btn-success"><a href="<?php echo URLROOT; ?>/user/logout" >Logout</a></li>
                                <li class="float-right"><a href="#">Hi, <?php echo $_SESSION['username']; ?></a></li>
                                <li class="cart float-left"><a href="<?php echo URLROOT; ?>/product/showCart"><i class="icon-shopping-cart"></i> Cart</a></li>
                            <?php else: ?>
                                <li><a href="<?php echo URLROOT; ?>/user/login" class="float-right">Login</a></li>
                                <li><a href="<?php echo URLROOT; ?>/user/register" class="float-right">Register</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="sale">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 text-center">
                        <div class="row">
                            <div class="owl-carousel2">
                                <div class="item">
                                    <div class="col">
                                        <h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col">
                                        <h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(<?php echo URLROOT ?>/assets_home/images/img_bg_1.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1 class="head-1">Men's</h1>
                                        <h2 class="head-2">Shoes</h2>
                                        <h2 class="head-3">Collection</h2>
                                        <p class="category"><span>New trending shoes</span></p>
                                        <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(<?php echo URLROOT ?>/assets_home/images/img_bg_2.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1 class="head-1">Huge</h1>
                                        <h2 class="head-2">Sale</h2>
                                        <h2 class="head-3"><strong class="font-weight-bold">50%</strong> Off</h2>
                                        <p class="category"><span>Big sale sandals</span></p>
                                        <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(<?php echo URLROOT ?>/assets_home/images/img_bg_3.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1 class="head-1">New</h1>
                                        <h2 class="head-2">Arrival</h2>
                                        <h2 class="head-3">up to <strong class="font-weight-bold">30%</strong> off</h2>
                                        <p class="category"><span>New stylish shoes for men</span></p>
                                        <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>