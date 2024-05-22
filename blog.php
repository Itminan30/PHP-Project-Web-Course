<!-- Session File Start -->
<?php
require_once __DIR__ . "/includes/config_session.inc.php";
?>
<!-- Session File End -->

<!-- Head of HTML Document -->
<?php
$title = "Home";
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

<!-- Inc File -->
<?php require "includes/blog.inc.php" ?>

<main>
    <div>
        <div>
            <img style="width: 1300px; height: 500px;margin: 50px auto;" src="<?php echo $blog["MAIN_PHOTO_URL"] ?>" class="object-cover" alt="">
        </div>
        <div>
            <p style="margin: 10px 100px; justify-content: center;font-weight:700;font-size:larger;">
                <?php echo $blog["BLOG_TITLE"] ?>
            </p>
        </div>
        <div>
            <p style="margin: 10px 100px; justify-content: center;">
                <?php echo $blog["BLOG_BODY"] ?>
            </p>
        </div>
    </div>

</main>

<!-- Footer Section Start -->
<?php
$CSSPath = "./css/style.css";
require "common/footer.php";
?>
<!-- Footer Section End -->