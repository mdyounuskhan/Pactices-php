<?php
session_start();
require_once 'db.php';
$id = $_POST['id'];
$password = $_POST['password'];
$re_password = $_POST['re_password'];
$confiram_password = $_POST['confiram_password'];

$update =  "UPDATE users SET password ='$re_password' WHERE id ='$id'";
$find = "SELECT COUNT(*) AS pass_info FROM users WHERE email='younus@khan.com' AND password=12345";



if ($password == $_SESSION['user_password']) {
    if ($re_password == $confiram_password) {
        mysqli_query($db_connection, $update);
        header('location: passwordchange.php');
        unset($_SESSION['user_password']);
        $_SESSION['user_password'] = $re_password;
    } else {
        echo "porer 2 ta mile nai";
    }
} else {
    echo "first pass vul";
}
