<!-- Session File Start -->
<?php
require_once __DIR__ . "/includes/config_session.inc.php";
?>
<!-- Session File End -->

<!-- Head of HTML Document -->
<?php
$title = "Blogs";
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

<!-- Require blogPage.inc.php -->
<?php require "includes/blogPage.inc.php" ?>
<!--  -->

<!-- Main Start -->
<main>
  <!--hero part-->
  <div class="hero h-72 " style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.jpg);">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="hero-content text-center text-neutral-content">
      <div class="max-w-md">
        <h1 class="mb-5 text-5xl font-bold text-white">BLOG</h1>
        <p class="mb-5  text-white">Recent Travel blog posts</p>
        <button style="border: 1px solid #ea1313; border-radius: 4px; padding: 5px 10px; background-color: #e65d5d; font-weight: bold;">
          <a href="blogWrite.php">
            Write Blog
          </a>
        </button>
      </div>
    </div>
  </div>


  <div class="whole_blog_cards">
    <!--blog cards-->
    <div class="blogs grid grid-cols-3 my-20">
        <?php foreach ($allBlogs as $blog) : ?>
            <div class="blog_card w-96 bg-base-200 m-auto">
                <figure><img style="height: 250px; width: 400px;" src="<?php echo $blog["MAIN_PHOTO_URL"]?>" alt="Shoes" /></figure>
                <div class="card-body text-center ">
                    <h2 class="blog-card-title"><?php echo $blog["BLOG_TITLE"] ?></h2>
                    <p><?php echo $blog["PLACE_NAME"] ?></p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-warning mt-5 m-auto">
                            <a href="<?php echo "./blog.php?blogID={$blog['BLOG_ID']}" ?>">Explore</a>
                        </button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
  </div>
</main>
<!-- Main End -->

<!-- Footer Section Start -->
<?php
$CSSPath = "./css/style.css";
require "common/footer.php";
?>
<!-- Footer Section End -->