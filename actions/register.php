<?php
    require('../core/config.php');
    if(isset($_POST['create_user'])){

    }else{
        $db->redirect(HTTP_HOST.'/register','danger', 'کلید عضویت به درستی ارسال نشده است .');
    }