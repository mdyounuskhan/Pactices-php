<?php
require_once "db.php";

$stat_name = $_POST['stat_name'];
$stat_icon = $_POST['stat_icon'];
$stat_amount = $_POST['stat_amount'];

$stat_insert_notice = "INSERT INTO stats (stat_name, stat_icon, stat_amount) VALUES('$stat_name', '$stat_icon', '$stat_amount')";

mysqli_query($db_connection, $stat_insert_notice);
header('location: addstat.php');
