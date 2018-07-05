<?php
    require('../core/config.php');
    if(isset($_POST['login'])){
        if($_POST['user_name'] != '' && $_POST['password'] != ''){
            $check_email = $db->where('email', $_POST['user_name'])->getOne('users', 'id,password,salt');
            $check_user = $db->where('user_name', $_POST['user_name'])->getOne('users', 'id,password,salt');
            if(count($check_email) > 0){
                $check_pass = $db->check_hashSSHA($_POST['password'],$check_email['salt']);
                if($check_pass == $check_email['password']){
                    setcookie('user_id', $check_email['id'], time() + 9600, '/');
                    $db->redirect(HTTP_HOST2);
                }else{
                    $db->redirect(HTTP_HOST2.'login', 'danger', 'رمز وورد صحیح نیست');
                }
            }elseif(count($check_user) > 0){
                $check_pass = $db->check_hashSSHA($_POST['password'],$check_user['salt']);
                if($check_pass == $check_user['password']){
                    setcookie('user_id', $check_user['id'], time() + 9600, '/');
                    $db->redirect(HTTP_HOST2);
                }else{
                    $db->redirect(HTTP_HOST2.'login', 'danger', 'رمز وورد صحیح نیست');
                }
            }else{
                $db->redirect(HTTP_HOST2.'login','danger', 'با مشخصات وارد شده کاربر یافت نشد');
            }
        }else{
            $db->redirect(HTTP_HOST2.'login', 'danger', 'نام کاربری یا رمزو ورود نباید خالی باشد');
        }
    }
