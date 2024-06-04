<!-- Session File Start -->
<?php
require_once __DIR__ . "/includes/config_session.inc.php";
?>
<!-- Session File End -->

<!-- Head of HTML Document -->
<?php
$title = "Blog Approve";
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

<?php require "includes/approveBlogs.inc.php" ?>

<main>
    <div class="blogs grid grid-cols-3 my-20">
        <?php foreach ($blogs as $blog) : ?>
            <div class="blog_card w-96 bg-base-200 m-auto">
                <figure><img style="height: 250px; width: 400px;" src="<?php echo $blog["MAIN_PHOTO_URL"] ?>" alt="Shoes" /></figure>
                <div class="card-body text-center ">
                    <h2 class="blog-card-title"><?php echo $blog["BLOG_TITLE"] ?></h2>
                    <p><?php echo $blog["PLACE_NAME"] ?></p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-warning text-white mt-5 m-auto">
                            <a href="<?php echo "./blog.php?blogID={$blog['BLOG_ID']}" ?>">Explore</a>
                        </button>
                        <button class="btn btn-success text-white mt-5 m-auto">
                            <a href="<?php echo "./includes/approveBlogs_mvc/approve.inc.php?id={$blog['BLOG_ID']}"?>">
                                Approve
                            </a>
                        </button>
                        <button class="btn btn-error text-white mt-5 m-auto">
                            Deny
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