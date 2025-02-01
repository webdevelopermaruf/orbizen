<?php
require_once "connection/index.php";
$portfolio = $conn->query("SELECT * FROM `portfolio` ORDER BY `id` ASC");

$title = "Orbizenstudio | Portfolio";
$path = "pages/Portfolio.php";
require_once "template.php";