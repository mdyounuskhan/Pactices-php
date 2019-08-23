<?php
session_start();
require_once 'db.php';
$notice_id = $_POST['id'];
$notice_date = $_POST['date'];
$notice_title = $_POST['notice_title'];
$notice_details = $_POST['notice_details'];

$update_notice_query = "UPDATE notices SET date = '$notice_date', notice_title = '$notice_title', notice_details = '$notice_details' WHERE id = $notice_id";

if ($notice_date && $notice_title && $notice_details) {
    mysqli_query($db_connection, $update_notice_query);
    $_SESSION['edit_notice'] = "Edit Notice Successfully";
    header('location: addnotice.php');
}
else {
    echo "Please Your Input";
}
?>