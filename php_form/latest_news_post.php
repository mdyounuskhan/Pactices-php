<?php
require_once "db.php";

$latest_news = $_POST['latest_news'];

$insert_news = "INSERT INTO latest_news (latest_news) VALUES('$latest_news')";

mysqli_query($db_connection, $insert_news);
header('location: latestnews.php');
