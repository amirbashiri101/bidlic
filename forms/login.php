<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= HTTP_HOST ?>/themes/assets/images/favicon.png">
    <title>بیدلیک :: ورود به حساب کاربری</title>
    <link href="<?= HTTP_HOST ?>/themes/assets/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= HTTP_HOST ?>/themes/assets/plugins/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <link href="<?= HTTP_HOST ?>/themes/assets/plugins/animate/animate.css" rel="stylesheet">
    <link href="<?= HTTP_HOST ?>/themes/assets/css/style.css" rel="stylesheet">
    <link href="<?= HTTP_HOST ?>/themes/assets/css/colors/default.css" id="theme" rel="stylesheet">
    <link href="<?= HTTP_HOST ?>/themes/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= HTTP_HOST ?>/themes/assets/plugins/linea-icons/css/linea-icons.css" rel="stylesheet">
    <link href="<?= HTTP_HOST ?>/themes/assets/plugins/material-design-iconic-font/css/material-design-iconic-font.css" rel="stylesheet">
    <link href="<?= HTTP_HOST ?>/themes/assets/plugins/weather-icons/css/weather-icons.css" rel="stylesheet">
    <link href="<?= HTTP_HOST ?>/themes/assets/plugins/themify-icons/css/themify-icons.css" rel="stylesheet">
    <link href="<?= HTTP_HOST ?>/themes/assets/plugins/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
</head>

<body>
<div class="preloader">
    <svg class="circular" viewbox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
    </svg>
</div>
<section id="wrapper" class="login-register">
    <div class="login-box">
        <?php
        if(@$_COOKIE['notif'] != ''){
            $db->notif(json_decode(@$_COOKIE['notif'],true)['type'], json_decode(@$_COOKIE['notif'],true)['text']);
            $_COOKIE['notif'] = '';
        }
        ?>
        <div class="white-box">
            <form class="form-horizontal form-material" id="loginform" action="<?= HTTP_HOST ?>/actions/login.php" method="post">
                <h3 class="box-title m-b-20">ورود</h3>
                <div class="form-group ">
                    <div class="col-12">
                        <input class="form-control" type="text" required="" placeholder="ایمیل یا نام کاربری" name="user_name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <input class="form-control" type="password" required="" placeholder="رمز عبور" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-primary pull-right p-t-0">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup"> به خاطر سپاری </label>
                        </div>
                        <a href="javascript:void(0)" id="to-recover" class="text-dark pull-left"><i class="fa fa-lock m-l-5"></i> بازیابی رمز عبور</a> </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" name="login" value="true">ورود</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 m-t-10 text-center">
                        <div class="social">
                            <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="ورود با گوگل"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        <p>حسابی ندارید؟ <a href="<?= HTTP_HOST2 ?>register" class="m-r-5"><b>عضو شوید</b></a></p>
                    </div>
                </div>
            </form>
            <form class="form-horizontal" id="recoverform" action="index.html">
                <div class="form-group ">
                    <div class="col-12">
                        <h3>بازیابی رمز عبور</h3>
                        <p class="text-muted">ایمیل خود را وارد کنید تا دستورالعمل ها به شما ارسال شود! </p>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-12">
                        <input class="form-control" type="text" required="" placeholder="ایمیل">
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">ارسال</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<script src="<?= HTTP_HOST ?>/themes/assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="<?= HTTP_HOST ?>/themes/assets/plugins/bootstrap/dist/js/tether.min.js"></script>
<script src="<?= HTTP_HOST ?>/themes/assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= HTTP_HOST ?>/themes/assets/plugins/bootstrap-extension/js/bootstrap-extension.min.js"></script>
<script src="<?= HTTP_HOST ?>/themes/assets/plugins/sidebar-nav/dist/sidebar-nav.min.js"></script>
<script src="<?= HTTP_HOST ?>/themes/assets/plugins/jquery.slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?= HTTP_HOST ?>/themes/assets/plugins/waves/waves.min.js"></script>
<script src="<?= HTTP_HOST ?>/themes/assets/js/custom.js"></script>
<script src="<?= HTTP_HOST ?>/themes/assets/js/style-switcher.js"></script>
</body>

</html>