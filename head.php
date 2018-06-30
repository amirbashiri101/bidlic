<?php
include_once 'core/config.php';
if(isset($_COOKIE['login'])){
	$db->redirect('loginform.php','dinger','نام کاربری یا رمز ورود اشتباه است');

}
echo $_COOKIE['login']
?>


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
	<!-- Bootstrap Core CSS -->
	<link href="assets/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/plugins/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
	<!-- Menu CSS -->
	<link href="assets/plugins/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
	<!-- morris CSS -->
	<link href="assets/plugins/morrisjs/morris.css" rel="stylesheet">
	<!-- animation CSS -->
	<link href="assets/plugins/animate/animate.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="assets/css/style.css" rel="stylesheet">
	<!-- color CSS -->
	<link href="assets/css/colors/default.css" id="theme" rel="stylesheet">
	<!-- Icons -->
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/plugins/linea-icons/css/linea-icons.css" rel="stylesheet">
	<link href="assets/plugins/material-design-iconic-font/css/material-design-iconic-font.css" rel="stylesheet">
	<link href="assets/plugins/weather-icons/css/weather-icons.css" rel="stylesheet">
	<link href="assets/plugins/themify-icons/css/themify-icons.css" rel="stylesheet">
	<link href="assets/plugins/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
</head>