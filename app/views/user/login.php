<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
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
<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12">
                <div class="login-card card-block">
                    <form class="md-float-material" method="post" action="<?php echo URLROOT; ?>/User/login">
                        <div class="text-center">
                            <img src="<?php echo URLROOT; ?>/assets/images/logo-black.png" alt="logo">
                        </div>
                        <h3 class="text-center txt-primary">
                            Đăng nhập
                        </h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-input-wrapper">
                                    <input type="text" name="username" class="md-form-control" />
                                    <label>Tên đăng nhập</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="md-input-wrapper">
                                    <input type="password" name="password" class="md-form-control" />
                                    <label>Mật khẩu</label>
                                </div>
                            </div>
                            <?php if (isset($data['errorLogin'])): ?>
                                <div class="col-md-12 form-control-feedback text-danger"><?php echo $data['errorLogin']; ?></div>
                            <?php  endif; ?>
                        </div>
                        <div class="row">
                            <div class="col-xs-10 offset-xs-1">
                                <button class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Đăng nhập</button>
                            </div>
                        </div>
                        <!-- <div class="card-footer"> -->
                        <div class="col-sm-12 col-xs-12 text-center">
                            <span class="text-muted">Chưa có tài khoản?</span>
                            <a href="<?php echo URLROOT; ?>/user/register" class="f-w-600 p-l-5">Đăng ký ngay</a>
                        </div>

                        <!-- </div> -->
                    </form>
                    <!-- end of form -->
                </div>
                <!-- end of login-card -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container-fluid -->
</section>
<script src="<?php echo URLROOT; ?>/assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="<?php echo URLROOT; ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo URLROOT; ?>/assets/plugins/tether/dist/js/tether.min.js"></script>

<!-- Required Framework -->
<script src="<?php echo URLROOT; ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- waves effects.js -->
<script src="<?php echo URLROOT; ?>/assets/plugins/Waves/waves.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="<?php echo URLROOT; ?>/assets/pages/elements.js"></script>

</body>
</html>
