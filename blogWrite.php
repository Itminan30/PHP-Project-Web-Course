<?php
// Session Start
require_once "includes/config_session.inc.php";
// view Start
require_once "includes/blogWrite_mvc/blogWrite_view.inc.php";
// Check if user is logged in
function checkLogin($email)
{
    if (!isset($email)) {
        $_SESSION["flash_message"] = "User Must Be Logged In To Write a Blog";
        header("Location: ./login.php");
        die();
    }
}
checkLogin($_SESSION["user_email"]);
?>
<!-- Head of HTML Document -->
<?php
$title = "Write Blog";
require "common/head.php";
?>
<!-- Head End -->

<!-- Header Section Start -->
<?php
require "common/header.php";
?>
<!-- Header Section End -->

<!-- Nav Section Start -->
<?php require "common/navbar.php" ?>
<!-- Nav Section End -->

<!-- Main Start -->
<main>
    <div>
        <div class="mx-auto text-center bg-slate-800 text-white mb-10 py-10">
            <h2 class="russo-one-regular">Write a Blog</h2>
            <p>Share your thought about a place at the capital of Bangladesh!</p>
            <?php
            check_write_errors();
            ?>
        </div>
    </div>

    <!--form-->
    <div class="contach-form">
        <form class="form" action="./includes/blogWrite.inc.php" enctype="multipart/form-data" method="post">
            <!-- Blog title -->
            <label for="title">Blog Title: </label>
            <input type="text" id="title" name="title" placeholder="Blog Title" required>
            <!-- Place of the blog -->
            <label for="place">Place: </label>
            <input type="text" id="place" name="place" placeholder="Place of the Blog" required>
            <!-- Place Location -->
            <label for="location">Map Location</label>
            <input type="text" id="location" name="location" placeholder="Google Map Location of the place" required>
            <!-- Place Image -->
            <label for="photo">Photo Of the Place</label>
            <input type="file" name="photo" id="photo">
            <!-- Blog body -->
            <label for="body">Write your Blog: </label>
            <textarea name="body" rows="20" placeholder="Write Here"></textarea><br>
            <!-- Submit Button -->
            <input class="contact-submit" type="submit" value="Submit">
        </form>
    </div>
</main>
<!-- Main End -->

<!-- Footer Section Start -->
<?php
$CSSPath = "./css/style.css";
require "common/footer.php";
?>
<!-- Footer Section End -->