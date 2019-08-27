<?php
require_once 'db.php';
$stat_id = $_GET['id'];
$delete_query = "DELETE FROM stats WHERE id = $stat_id";
mysqli_query($db_connection, $delete_query);
header('location: addstat.php');
