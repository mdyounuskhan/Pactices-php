<?php
require_once 'db.php';
$id = $_GET['id'];

$delete_query = "DELETE FROM principals WHERE id = $id";
mysqli_query($db_connection, $delete_query);
header('location: principal.php');
