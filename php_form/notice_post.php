<?php
require_once "db.php";

$date = $_POST['date'];
$notice_title = $_POST['notice_title'];
$notice_details = $_POST['notice_details'];

$insert_notice = "INSERT INTO notices (date, notice_title, notice_details) VALUES('$date', '$notice_title', '$notice_details')";

mysqli_query($db_connection, $insert_notice);
header('location: addnotice.php');
?>