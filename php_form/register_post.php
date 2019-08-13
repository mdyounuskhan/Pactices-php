<?php
include_once 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$insert_query = "INSERT INTO users( name, email, password) VALUES ('$name', '$email', '$password')";
$find_duplicate_email = "SELECT COUNT(*) AS email_list FROM users WHERE email='$email'";

$data_query_email = mysqli_query($db_connection, $find_duplicate_email);

$after_assoc_email = mysqli_fetch_assoc($data_query_email);

if ($name && $email && $password) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($after_assoc_email['email_list'] == 0) {
            mysqli_query($db_connection, $insert_query);
            header('location: login.php');
        } else {
            echo "Your Email Already Use";
        }
    } else {
        echo "Your Email invalid";
    }
} else {
    echo "Please Your input !";
}
