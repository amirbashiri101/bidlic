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
        case "add_product":
            require('forms/add_product.php');
            break;
        case "category":
            require('forms/category.php');
            break;
        default:
            require('home.php');
    }
}elseif($_COOKIE['user_id'] != ''){
    $user = $db->where('id', $_COOKIE['user_id'])->getOne('users');
    require('header.php');
    require('sidebar.php');
    echo $_COOKIE['user_id'];
    switch ($linkOne) {

        default:
            require('home.php');
    }
    require('footer.php');

}
