<?php
    require_once("mysql_class.php");
    require_once('jdf.php');
    require("mail_class.php");
    $mailer = SimpleMail::make();
    $db = new MysqliDb (
        Array (
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'db'=> 'bidlic',
            'charset' => 'utf8'
        )
    );
    define('HTTP_HOST', 'http://localhost:85/bidlic');
    define('HTTP_HOST2', 'http://localhost:85/bidlic/index.php?linkOne=');
    

