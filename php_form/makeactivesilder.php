<?php
require_once 'db.php';
$silder_id = $_GET['id'];

$update_status_query = "UPDATE silders SET status = 2 WHERE id=  $silder_id";
mysqli_query($db_connection, $update_status_query);
header('location: addsilder.php');
?>