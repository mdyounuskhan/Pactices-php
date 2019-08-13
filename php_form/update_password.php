<?php
session_start();
require_once 'db.php';
$id = $_POST['id'];
$password = md5($_POST['password']);
$re_password = MD5($_POST['re_password']);
$confiram_password = md5($_POST['confiram_password']);

$update =  "UPDATE users SET password ='$re_password' WHERE id ='$id'";


if ($password && $re_password && $confiram_password) {
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
} else {
    echo "Your Input Empty!";
}
