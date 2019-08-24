<?php
require_once 'db.php';
$silder_name =  $_GET['silder_name'];
$silder_id =  $_GET['id'];

if ($silder_name == 'defultphoto.jpg') {
    $delete_silder_query = "DELETE FROM silders WHERE id = $silder_id";
    mysqli_query($db_connection, $delete_silder_query);
}
else {
    $delete_silder_query = "DELETE FROM silders WHERE id = $silder_id";
    mysqli_query($db_connection, $delete_silder_query);
    unlink("uploads/silders/". $silder_name);
}
header('location: addsilder.php');
?>