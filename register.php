<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>قالب مدیریتی Elite</title>
    <link href="themes/assets/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="themes/assets/plugins/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <link href="themes/assets/plugins/animate/animate.css" rel="stylesheet">
    <link href="themes/assets/plugins/register-steps/steps.css" rel="stylesheet">
    <link href="themes/assets/css/style.css" rel="stylesheet">
    <link href="themes/assets/css/colors/default.css" id="theme" rel="stylesheet">
    <link href="themes/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="themes/assets/plugins/linea-icons/css/linea-icons.css" rel="stylesheet">
    <link href="themes/assets/plugins/material-design-iconic-font/css/material-design-iconic-font.css" rel="stylesheet">
    <link href="themes/assets/plugins/weather-icons/css/weather-icons.css" rel="stylesheet">
    <link href="themes/assets/plugins/themify-icons/css/themify-icons.css" rel="stylesheet">
    <link href="themes/assets/plugins/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <style>
        #eliteregister li{
            color: #fff;
        }
        #eliteregister li::before {
            color: #686868;
            background-color: #fff;
        }
    </style>
</head>

<body>
    <div class="preloader">
        <svg class="circular" viewbox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
        </svg>
    </div>
    <section id="wrapper" class="step-register">
        <?php
        if(@$_COOKIE['notif'] != ''){
            $db->notif(json_decode(@$_COOKIE['notif'],true)['type'], json_decode(@$_COOKIE['notif'],true)['text']);
            $_COOKIE['notif'] = '';
        }
        ?>
        <div class="register-box">
            <div class="">
                <form id="msform" actions="<?= HTTP_HOST ?>/actions/register.php">
                    <ul id="eliteregister">
                        <li class="active">نام ها</li>
                        <li>راه های ارتباطی</li>
                        <li>آدرس</li>
                    </ul>
                    <fieldset>
                        <h2 class="fs-title">نام های خود را در بخش های مختلف وارد کنید</h2>
                        <h3 class="fs-subtitle">قدم اول</h3>
                        <input type="text" name="full_name" placeholder="نام و نام خانوادگی">
                        <input type="text" name="user_name" placeholder="نام کاربری">
                        <input type="text" name="auction_name" placeholder="نام نمایشی در مزایده">
                        <input type="button" name="next" class="next action-button" value="بعدی">
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title"> راه های ارتباطی خود را وارد کنید</h2>
                        <h3 class="fs-subtitle">قدم دوم</h3>
                        <input type="text" name="mobile" placeholder="موبایل">
                        <input type="text" name="phone" placeholder="تلفن">
                        <input type="text" name="email" placeholder="ایمیل">
                        <input type="button" name="previous" class="previous action-button" value="قبلی">
                        <input type="button" name="next" class="next action-button" value="بعدی">
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">آدرس محل سکونت</h2>
                        <h3 class="fs-subtitle">قدم آخر</h3>
                        <textarea name="address" placeholder="آدرس"></textarea>
                        <input type="button" name="previous" class="previous action-button" value="قبلی">
                        <input type="submit" name="create_user" class="submit action-button" value="ثبت">
                    </fieldset>
                </form>
                <div class="clear"></div>
            </div>
        </div>
    </section>
    <script src="themes/assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="themes/assets/plugins/bootstrap/dist/js/tether.min.js"></script>
    <script src="themes/assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="themes/assets/plugins/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <script src="themes/assets/plugins/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <script src="themes/assets/plugins/register-steps/jquery.easing.min.js"></script>
    <script src="themes/assets/js/register-init.js"></script>
    <script src="themes/assets/plugins/jquery.slimscroll/jquery.slimscroll.min.js"></script>
    <script src="themes/assets/plugins/waves/waves.min.js"></script>
    <script src="themes/assets/js/custom.js"></script>
    <script src="themes/assets/js/style-switcher.js"></script>
    </body>

</html>