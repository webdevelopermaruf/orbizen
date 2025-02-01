<?php
require_once '../connection/index.php';
$uri = ltrim($_SERVER['PATH_INFO'], "/");
$sql = "SELECT * FROM `portfolio` WHERE `slug` = '$uri'";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
$n= ($data["id"] + 1);
$p= ($data["id"] - 1);
$next = "SELECT slug FROM `portfolio` WHERE `id` = $n";
$prev = "SELECT slug FROM `portfolio` WHERE `id` = $p";

$next_result = $conn->query($next);
$nresult = $next_result->fetch_assoc();
$prev_result = $conn->query($prev);
$presult = $prev_result->fetch_assoc();


$title = $data['title'];
$title = "Orbizenstudio | $title";
$path = "../pages/Project-Details.php";
require_once "../template.php";