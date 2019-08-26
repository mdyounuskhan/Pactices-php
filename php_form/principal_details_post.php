<?php
require_once 'db.php';
$name = $_POST['name'];
$message = $_POST['message'];
$image = $_FILES['image']['name'];

$insert_query = "INSERT INTO principals (name, image, message) VALUES ('$name', '$image', '$message')";
mysqli_query($db_connection, $insert_query);
$tem_file = $_FILES['image']['tmp_name'];
$new_file_location = "uploads/principal/" . $image;
move_uploaded_file($tem_file, $new_file_location);
header('location: principal.php');

?>