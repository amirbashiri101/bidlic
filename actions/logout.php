<?php
    require('../core/config.php');
    setcookie('user_id', '', time() - 9600, '/');
    unset($_COOKIE['user_id']);
    $db->redirect(HTTP_HOST2.'login');
