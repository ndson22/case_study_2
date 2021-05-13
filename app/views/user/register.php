<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
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
<body>

<section class="login common-img-bg">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="login-card card-block bg-white">
                    <form class="md-float-material" action="<?php echo URLROOT; ?>/user/register" method="post">
                        <h3 class="text-center txt-primary">Đăng ký tài khoản </h3>
                        <div class="md-input-wrapper">
                                <div class="md-input-wrapper">
                                    <input type="text" class="md-form-control" name="name">
                                    <label>Họ tên</label>
                                </div>
                                <?php if (isset($data['errorName'])): ?>
                                    <div class="form-control-feedback text-danger"><?php echo $data['errorName']; ?></div>
                                <?php  endif; ?>
                        </div>
                        <div class="md-input-wrapper">
                            <input type="text" class="md-form-control" name="phone">
                            <label>Số điện thoại</label>
                        </div>
                        <?php if (isset($data['errorPhone'])): ?>
                            <div class="form-control-feedback text-danger"><?php echo $data['errorPhone']; ?></div>
                        <?php  endif; ?>
                        <div class="md-input-wrapper">
                            <input type="text" class="md-form-control" name="address">
                            <label>Địa chỉ</label>
                        </div>
                        <?php if (isset($data['errorAddress'])): ?>
                            <div class="form-control-feedback text-danger"><?php echo $data['errorAddress']; ?></div>
                        <?php  endif; ?>
                        <div class="md-input-wrapper">
                            <input type="text" class="md-form-control" name="username">
                            <label>Tên đăng nhập</label>
                        </div>
                        <?php if (isset($data['errorUsername'])): ?>
                            <div class="form-control-feedback text-danger"><?php echo $data['errorUsername']; ?></div>
                        <?php  endif; ?>
                        <div class="md-input-wrapper">
                            <input type="email" class="md-form-control" name="email">
                            <label>Email</label>
                        </div>
                        <?php if (isset($data['errorEmail'])): ?>
                            <div class="form-control-feedback text-danger"><?php echo $data['errorEmail']; ?></div>
                        <?php  endif; ?>
                        <div class="md-input-wrapper">
                            <input type="password" class="md-form-control" name="password1">
                            <label>Mật khẩu</label>
                        </div>
                        <?php if (isset($data['errorPass1'])): ?>
                            <div class="form-control-feedback text-danger"><?php echo $data['errorPass1']; ?></div>
                        <?php  endif; ?>
                        <div class="md-input-wrapper">
                            <input type="password" class="md-form-control" name="password2">
                            <label>Xác nhận mật khẩu</label>
                        </div>
                        <?php if (isset($data['errorPass2'])): ?>
                            <div class="form-control-feedback text-danger"><?php echo $data['errorPass2']; ?></div>
                        <?php  endif; ?>

                        <div class="col-xs-10 offset-xs-1">
                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light m-b-20">Đăng ký
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <span class="text-muted">Đã có tài khoản?</span>
                                <a href="<?php echo URLROOT; ?>/User/login" class="f-w-600 p-l-5"> Đăng nhập ngay</a>
                            </div>
                        </div>
                    </form>
                    <!-- end of form -->
                </div>
                <!-- end of login-card -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row-->
    </div>
    <!-- end of container-fluid -->
</section>

<script src="<?php echo URLROOT ?>/assets_home/js/jquery.min.js"></script>
<!-- popper -->
<script src="<?php echo URLROOT ?>/assets_home/js/popper.min.js"></script>
<!-- bootstrap 4.1 -->
<script src="<?php echo URLROOT ?>/assets_home/js/bootstrap.min.js"></script>
<!-- jQuery easing -->
<script src="<?php echo URLROOT ?>/assets_home/js/jquery.easing.1.3.js"></script>
<!-- Waypoints -->
<script src="<?php echo URLROOT ?>/assets_home/js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="<?php echo URLROOT ?>/assets_home/js/jquery.flexslider-min.js"></script>
<!-- Owl carousel -->
<script src="<?php echo URLROOT ?>/assets_home/js/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="<?php echo URLROOT ?>/assets_home/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo URLROOT ?>/assets_home/js/magnific-popup-options.js"></script>
<!-- Date Picker -->
<script src="<?php echo URLROOT ?>/assets_home/js/bootstrap-datepicker.js"></script>
<!-- Stellar Parallax -->
<script src="<?php echo URLROOT ?>/assets_home/js/jquery.stellar.min.js"></script>
<!-- Main -->
<script src="<?php echo URLROOT ?>/assets_home/js/main.js"></script>
</body>
</html>




