<?php
    require('../core/config.php');
    if(isset($_POST['create_user'])){
        if($_POST['full_name'] == ''){
            $db->redirect(HTTP_HOST2.'register','danger', 'نام و نام خانوادگی نباید خالی باشد');
        }elseif($_POST['user_name'] == ''){
            $db->redirect(HTTP_HOST2.'register', 'danger', 'نام کاربری نباید خالی باشد');
        }elseif($_POST['auction_name'] == ''){
            $db->redirect(HTTP_HOST2.'register', 'danger', 'نام نمایشی در مزایده نباید خالی باشد');
        }elseif($_POST['mobile'] == '' || !is_numeric($_POST['mobile'])){
            $db->redirect(HTTP_HOST2.'register', 'danger', 'شماره موبایل نباید خالی یا از نوع غیر عددی باشد');
        }elseif($_POST['email'] == ''){
            $db->redirect(HTTP_HOST2.'register', 'danger', 'ایمیل نباید خالی باشد');
        }elseif($_POST['auction_name'] == ''){
            $db->redirect(HTTP_HOST2.'register', 'danger', 'نام نمایشی در مزایده نباید خالی باشد');
        }else{
            $pass = $db->hashSSHA($_POST['password']);
            $id = $db->insert('users', [
                'type' => '2',
                'email' => $_POST['email'],
                'password' => $pass['encrypted'],
                'salt' => $pass['salt'],
                'full_name' => $_POST['full_name'],
                'user_name' => $_POST['user_name'],
                'auction_name' => $_POST['auction_name'],
                'phone' => $_POST['phone'],
                'mobile' => $_POST['mobile'],
                'address' => $_POST['address'],
                'ip' => $db->get_client_ip()
            ]);
            if ($db->getLastErrno() === 0) {
                $db->where('id', $id)->update('users', ['app_key' => $app_key = $db->create_random_code($id)]);
                setcookie('user_id', $id, time() + 9600, '/');
                $db->redirect(HTTP_HOST2);
            }else{
                $db->redirect(HTTP_HOST2.'register','danger','خطا در ثبت نام : '.$db->getLastError());
            }
        }
    }else{
        $db->redirect(HTTP_HOST2.'/register','danger', 'کلید عضویت به درستی ارسال نشده است');
    }