<?php
include_once '../core/config.php';
$user_name = @$_POST['user_name'];
$pass = $_POST['pass'];
if (isset($_POST['sub'])){
    $chek_user = $db->get('bidlic_admins',null);
    if($user_name == $chek_user['user_name'] && $pass == $chek_user['password']){
        setcookie('login','uyytut',time() + 1000,'/');
        $db->redirect('index.php','success','انتقال یافت');
    }
}


?>