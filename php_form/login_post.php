<?php
session_start();
include_once 'db.php';

$login_email = $_POST['email'];
$login_password = md5($_POST['password']);

$find_data = "SELECT COUNT(*) AS login_info, name, id, role, password FROM users WHERE email='$login_email' AND password='$login_password'";

$data_query = mysqli_query($db_connection, $find_data);

$data_query_email = mysqli_query($db_connection, $find_duplicate_email);

$after_assoc = mysqli_fetch_assoc($data_query);

if ($login_email && $login_password) {
    if ($after_assoc['login_info'] == 1) {
        $_SESSION['user_name'] = $after_assoc['name'];
        $_SESSION['user_password'] = $after_assoc['password'];
        $_SESSION['user_id'] = $after_assoc['id'];
        $_SESSION['role'] = $after_assoc['role'];
        header('location: dashboard.php');
    } else {
        header('location: login.php');
    }
} else {
    header('location: login.php');
}
