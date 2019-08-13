<?php
session_start();
require_once 'db.php';

$name = $_POST['name'];
$id = $_POST['id'];

$update =  "UPDATE users SET name ='$name' WHERE id ='$id'";

mysqli_query($db_connection, $update);
unset($_SESSION['user_name']);
$_SESSION['user_name'] = $name;
$_SESSION['update_status'] = 'yes';


header('location: editprofile.php');
