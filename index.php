<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require("core/config.php");
$linkOne = $db->protect(@$_GET['linkOne']);
if($linkOne == 'register' || $linkOne == 'login' || $_COOKIE['user_id'] == ''){
    switch ($linkOne) {
        case "login":
            require('forms/login.php');
            break;
        case "register":
            require('forms/register.php');
            break;
        default:
            require('home.php');
    }
}else{
    $user = $db->where('id', $_COOKIE['user_id'])->getOne('users');
    require('header.php');
    require('sidebar.php');
}
