<?php
session_start();
include_once 'db.php';

$login_email = $_POST['email'];
$login_password = $_POST['password'];

$find_data = "SELECT COUNT(*) AS login_info, name FROM users WHERE email='$login_email' AND password='$login_password'";

$data_query = mysqli_query($db_connection, $find_data);

$data_query_email = mysqli_query($db_connection, $find_duplicate_email);

$after_assoc = mysqli_fetch_assoc($data_query);

if ($_POST['email'] && $_POST['password']) {
    if ($after_assoc['login_info'] == 1) {
        $_SESSION['user_name'] = $after_assoc['name'];
        header('location: dashboard.php');
    } else {
        echo "Your Email & Password invalid";
    }

} else {
    header('location: login.php');
}
