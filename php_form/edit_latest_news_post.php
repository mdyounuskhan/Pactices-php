<?php
require_once 'db.php';
$news_id = $_POST['id'];
$latest_news = $_POST['latest_news'];

$update_news_query = "UPDATE latest_news SET latest_news = '$latest_news' WHERE id = $news_id";
mysqli_query($db_connection, $update_news_query);
header('location: latestnews.php');
