<?php
require_once '../connection/index.php';
$uri = ltrim($_SERVER['PATH_INFO'], "/");
$sql = "SELECT * FROM `blogs` WHERE `slug` = '$uri'";
$latest_sql = "SELECT * FROM `blogs` ORDER BY `id` DESC limit 3";
$result = $conn->query($sql);
$latest = $conn->query($latest_sql);


$data = $result->fetch_assoc();


$title = $data['title'];
$title = "Orbizenstudio | $title";
$path = "../pages/Blog-Details.php";
require_once "../template.php";