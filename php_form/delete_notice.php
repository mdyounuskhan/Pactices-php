<?php
require_once 'db.php';
$notice_id = $_GET['id'];
$delete_query = "DELETE FROM notices WHERE id = $notice_id";
mysqli_query($db_connection, $delete_query);
header('location: addnotice.php');
?>