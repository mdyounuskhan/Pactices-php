<?php
require_once 'db.php';
$old_silder_name =  $_POST['old_silder_name'];
$old_silder_id =  $_POST['old_silder_id'];

if ($old_silder_name != 'defultphoto.jpg') {
    unlink("uploads/silders/" . $silder_name);
}
$new_upload_file = $_FILES['silder_image']['name'];
$tem_location = $_FILES['silder_image']['tmp_name'];
//get extension by explode func
$after_explode = explode(".", $new_upload_file);
//to get last value
$our_upload_file_extension = end($after_explode);

$new_silder_name = $old_silder_id.".". $our_upload_file_extension;

$new_upload_location = "uploads/silders/". $new_silder_name;

move_uploaded_file($tem_location, $new_upload_location);

$update_query = "UPDATE silders SET silder_image = '$new_silder_name' WHERE id = $old_silder_id";
mysqli_query($db_connection, $update_query);

header('location: addsilder.php');
