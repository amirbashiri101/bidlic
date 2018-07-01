<?php
include_once '../core/config.php';
$user_name = @$_POST['user_name'];
$pass = $_POST['pass'];
$chek_user = $db->get('bidlic_admins',null,'user_name,password');
foreach ($chek_user as $c)
if (isset($_POST['sub'])){
    if($user_name == $c['user_name']&& $pass == $c['password']){
        setcookie('login','uyytut',time()+10000000,"/");
        $db->redirect('../index.php','success','انتقال یافت');
    }

}


?>