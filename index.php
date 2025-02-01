<?php
require_once "connection/index.php";
$result = $conn->query("SELECT * FROM `blogs` ORDER BY `id` ASC LIMIT 2");
$portfolio = $conn->query("SELECT * FROM `portfolio` ORDER BY `id` ASC LIMIT 4");

$title = "Orbizenstudio | Home";
$path = "pages/Home.php";
require_once "template.php";