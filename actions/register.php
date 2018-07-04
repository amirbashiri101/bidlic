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
            function create_random_code(){
                $str = "1234567890abcdefghijknmopqrstuvwxyzABCDEFGHIJKNMOPQRSTUVWXYZ";
                $max = strlen($str)-1;
                $random_str="";
                for ($i=0; $i<32; $i++) {
                    $number = mt_rand(0, $max);
                    if ($i==8 || $i==12 || $i==16 || $i==20){
                        $random_str .='-';
                    }
                    $random_str .= substr($str, $number, 1);
                }

                return $random_str;
            }
            $app_key = create_random_code();
            $pass = $db->hashSSHA($_POST['password']);
            $db->insert('users', [
                'type' => '2',
                'email' => $_POST['email'],
                'password' => $pass['encrypted'],
                'salt' => $pass['salt'],
                'app_key' => $app_key,
                'full_name' => $_POST['full_name'],
                'user_name' => $_POST['user_name'],
                'auction_name' => $_POST['auction_name'],
                'phone' => $_POST['phone'],
                'mobile' => $_POST['mobile'],
                'address' => $_POST['address'],
                'ip' => $db->get_client_ip()
            ]);
        }
    }else{
        $db->redirect(HTTP_HOST2.'/register','danger', 'کلید عضویت به درستی ارسال نشده است');
    }