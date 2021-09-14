<?php

$localhost = '127.0.0.1';
$user = 'root';
$pass = '';
$database = 'anketa';

$conn = mysqli_connect($localhost, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
