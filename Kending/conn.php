<?php
    $hostname = 'localhost';
    $username = 'trip';
    $password = 'trip';
    $dbname = 'php_hw_users';

    $conn = mysqli_connect($hostname,$username, $password, $dbname);
    $conn -> set_charset("UTF8");
?>