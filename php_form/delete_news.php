<?php
require_once 'db.php';
$news_id = $_GET['id'];
$delete_query = "DELETE FROM latest_news WHERE id = $news_id";
mysqli_query($db_connection, $delete_query);
header('location: latestnews.php');
