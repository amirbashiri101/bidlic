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
    @define('SITE_ROOT2',@$_SERVER['DOCUMENT_ROOT']);
    @define('HTTP_HOST2','http://localhost');
    @define('SITE_ROOT',@$_SERVER['DOCUMENT_ROOT'].'bidlic');
    @define('HTTP_HOST','http://localhost/bidlic');

