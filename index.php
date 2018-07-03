<?php
require("core/config.php");
$linkOne = $db->protect(@$_GET['linkOne']);
if($linkOne == 'register' || $linkOne == 'login' || $_COOKIE['user_id'] == ''){
    switch ($linkOne) {
        case "login":
            require('login.php');
            break;
        case "register":
            require('register.php');
            break;
        default:
            require('home.php');
    }
}else{
    $user = $db->where('id', $_COOKIE['user_id'])->getOne('users');
    require('header.php');
    require('sidebar.php');
}
