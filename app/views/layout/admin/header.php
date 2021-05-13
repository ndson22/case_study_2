<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?php echo URLROOT; ?>/assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo URLROOT; ?>/assets/images/favicon.ico" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/icon/themify-icons/themify-icons.css">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/icon/icofont/css/icofont.css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

    <!-- Weather css -->
    <link href="<?php echo URLROOT; ?>/assets/css/svg-weather.css" rel="stylesheet">


    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/css/responsive.css">

</head>

<body class="sidebar-mini fixed">
<div class="loader-bg">
    <div class="loader-bar">
    </div>
</div>
<div class="wrapper">
    <!-- Navbar-->
    <header class="main-header-top hidden-print">
        <a href="#" class="logo"><img class="img-fluid able-logo" src="<?php echo URLROOT; ?>/assets/images/logo.png" alt="Theme-logo"></a>
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" data-toggle="offcanvas" class="sidebar-toggle"></a>

            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu f-right">

                <ul class="top-nav">
                    <!-- window screen -->
                    <li class="pc-rheader-submenu">
                        <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                            <i class="icon-size-fullscreen"></i>
                        </a>
                    </li>
                    <!-- User Menu-->
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
                           class="dropdown-toggle drop icon-circle drop-image">
                            <span><img class="img-circle " src="<?php echo URLROOT; ?>/assets/images/avatar-1.png" style="width:40px;"
                                       alt="User Image"></span>
                            <span><?php echo $_SESSION['username'] ?> <i class=" icofont icofont-simple-down"></i></span>

                        </a>
                        <ul class="dropdown-menu settings-menu">
                            <li><a href="<?php echo URLROOT; ?>/Manager/showProfile"><i class="icon-user"></i> Profile</a></li>
                            <li class="p-0">
                                <div class="dropdown-divider m-0"></div>
                            </li>
                            <li><a href="<?php echo URLROOT; ?>/User/logout"><i class="icon-logout"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
