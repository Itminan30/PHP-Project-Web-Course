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
    <div class="blogs grid grid-cols-3 my-20">
        <?php foreach ($myBlogs as $blog) : ?>
            <div class="blog_card w-96 bg-base-200 m-auto ">
                <figure><img style="height: 250px; width: 400px;" src="<?php echo $blog["MAIN_PHOTO_URL"] ?>" alt="Shoes" /></figure>
                <div class="card-body text-center ">
                    <h2 class="blog-card-title"><?php echo $blog["BLOG_TITLE"] ?></h2>
                    <p><?php echo $blog["PLACE_NAME"] ?></p>
                    <?php if ($blog["APPROVAL"] === "APPROVED") : ?>
                        <p class="text-green-500">
                            <?php echo $blog["APPROVAL"] ?>
                        </p>
                    <?php elseif ($blog["APPROVAL"] === "DENIED") : ?>
                        <p class="text-red-500">
                            <?php echo $blog["APPROVAL"] ?>
                        </p>
                    <?php else : ?>
                        <p class="text-gray-500">
                            <?php echo $blog["APPROVAL"] ?>
                        </p>
                    <?php endif ?>
                    <div class="card-actions justify-end">
                        <button class="btn btn-warning mt-5 m-auto">
                            <a href="<?php echo "./blog.php?blogID={$blog['BLOG_ID']}" ?>">Explore</a>
                        </button>
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