<?php
    require_once("mysql_class.php");
    require_once('jdf.php');
    $db = new MysqliDb (
        Array (
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'db'=> 'bidlic',
            'charset' => 'utf8'
        )
    );
    

