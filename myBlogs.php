<!-- Session File Start -->
<?php
require_once __DIR__ . "/includes/config_session.inc.php";
?>
<!-- Session File End -->

<!-- Head of HTML Document -->
<?php
$title = "My Blogs";
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

<?php
require "includes/myBlogs.inc.php"
?>

<main>
    <div class="blogs">
        <?php foreach ($myBlogs as $blog) : ?>
            <div class="blog_card w-96 bg-base-100 ">
                <figure><img style="height: 250px; width: 400px;" src="<?php echo $blog["MAIN_PHOTO_URL"]?>" alt="Shoes" /></figure>
                <div class="card-body text-center ">
                    <h2 class="blog-card-title"><?php echo $blog["BLOG_TITLE"] ?></h2>
                    <p><?php echo $blog["PLACE_NAME"] ?></p>
                    <div class="card-actions justify-end">
                        <button class="btn  m-auto">Explore</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<!-- Footer Section Start -->
<?php
$CSSPath = "./css/style.css";
require "common/footer.php";
?>
<!-- Footer Section End -->