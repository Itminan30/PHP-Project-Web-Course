<!-- Session File Start -->
<?php
require_once __DIR__ . "/includes/config_session.inc.php";
?>
<!-- Session File End -->

<!-- Head of HTML Document -->
<?php
$title = "Purchase List";
require "common/head.php";
?>
<!--  -->

<!-- Header Section Start -->
<?php
require "common/header.php";
?>
<!-- Header Section End -->

<!-- Nav Section Start -->
<?php require "common/navbar.php" ?>
<!-- Nav Section End -->

<!-- Require INC file -->
<?php require "includes/purchaseList.inc.php" ?>
<!--  -->

<!-- Main Section Start -->
<main>

</main>
<!-- Main Section End -->

<!-- Footer Section Start -->
<?php
$CSSPath = "./css/style.css";
require "common/footer.php";
?>
<!-- Footer Section End -->
