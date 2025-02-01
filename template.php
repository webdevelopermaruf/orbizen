<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="<?php echo $title;?>" />
    <meta name="description" content="We are a Top-notch Website Design Agency Driving Your Business Growth" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title><?php echo $title;?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/imgs/favicon.ico" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />

    <!-- Plugins -->
    <link rel="stylesheet" href="/assets/css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="/assets/css/common_style.css" />
    <link rel="stylesheet" href="/assets/css/inner_pages.css">
    <link rel="stylesheet" href="/assets/css/home7-style.css" />
    <!-- jQuery -->
    <script src="/assets/js/lib/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/lib/jquery-migrate-3.4.0.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>
</head>

<body>
<!-- ==================== Start Loading ==================== -->
<?php require_once "component/loader.php";?>
<!-- ==================== End Loading ==================== -->


<!-- ==================== Start Navbar ==================== -->
<?php require_once "component/header.php";?>
<!-- ==================== End Navbar ==================== -->

<?php require_once $path;?>

<!-- plugins -->
<script src="/assets/js/lib/plugins.js"></script>

<!-- GSAP -->
<script src="/assets/js/gsap_lib/gsap.min.js"></script>
<script src="/assets/js/gsap_lib/ScrollSmoother.min.js"></script>
<script src="/assets/js/gsap_lib/ScrollTrigger.min.js"></script>
<script src="/assets/js/gsap_lib/SplitText.min.js"></script>

<!-- common scripts -->
<script src="/assets/js/common_scripts.js"></script>

<!-- custom scripts -->
<script src="/assets/js/scripts.js"></script>
</body>

</html>