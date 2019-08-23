<?php
session_start();
require_once 'db.php';
$notice_id = $_GET['id'];
$delete_query = "DELETE FROM notices WHERE id = $notice_id";
mysqli_query($db_connection, $delete_query);
$_SESSION['delete_notice'] = "Notice Delete Successfully";
header('location: addnotice.php');
?>