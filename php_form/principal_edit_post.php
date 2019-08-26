<?php
require_once 'db.php';
$principal_id = $_POST['principal_id'];
$principal_name = $_POST['name'];
$principal_message = $_POST['message'];
$principal_image_name = $_POST['principal_image_name'];
$image = $_FILES['image']['name'];


if ($image) {
    $update_query = "UPDATE principals SET name = '$principal_name',  image = '$image', message = '$principal_message'";
    mysqli_query($db_connection, $update_query);
    $tmp_name = $_FILES['image']['tmp_name'];
    $new_location = "uploads/principal/". $image;
    move_uploaded_file($tmp_name, $new_location);
    unlink("uploads/principal/". $principal_image_name);
    header('location: principal.php');
}
else {
    $update_query = "UPDATE principals SET name = '$principal_name', message = '$principal_message'";
    mysqli_query($db_connection, $update_query);
    header('location: principal.php');

}
?>