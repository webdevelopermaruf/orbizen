<?php
require_once "connection/index.php";
$sql = "SELECT * FROM `blogs` ORDER BY `id` DESC";
$result = $conn->query($sql);

$title = "Orbizenstudio | Blogs";
$path = "pages/Blog.php";
require_once "template.php";