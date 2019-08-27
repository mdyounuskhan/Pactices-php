<?php
require_once 'db.php';
$stat_id = $_POST['stat_id'];
$stat_name = $_POST['stat_name'];
$stat_icon = $_POST['stat_icon'];
$stat_amount = $_POST['stat_amount'];

$stat_update_notice = "UPDATE stats SET stat_name = '$stat_name', stat_icon = '$stat_icon', stat_amount = '$stat_amount' WHERE id = $stat_id";

mysqli_query($db_connection, $stat_update_notice);
header('location: addstat.php');

?>