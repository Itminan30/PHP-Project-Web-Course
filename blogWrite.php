<?php
// Session Start
require_once "includes/config_session.inc.php";
// Check if user is logged in
function checkLogin($email){
    if(!isset($email)){
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
<nav>
    <div class="header-nav">
        <div class="navbar bg-base-100">
            <div class="flex-1">
                <a class="metal-mania-regular" href=" ">Gulliver's Travels</a>
            </div>
        </div>
        <div class="header-nav-buttons">
            <a class="roboto-medium" href="./index.php">Home</a>
            <a class="roboto-medium" href="./tourPackage.php">Packages</a>
            <a class="roboto-medium" style="color: rgb(207, 24, 24);" href="./blogPage.php">Blog</a>
            <a class="roboto-medium" href=" ">About</a>
            <a class="roboto-medium" href="./contact.php">Contact</a>
            <?php if (isset($_SESSION["user_email"])) : ?>
                <!-- Profile Picture -->
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img alt="<?php echo $_SESSION["user_username"] ?>" src="<?php if (isset($_SESSION["user_photo"])) echo $_SESSION["user_photo"] ?>" />
                        </div>
                    </div>
                    <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                            <a>
                                <?php if (isset($_SESSION["user_email"])) echo $_SESSION["user_email"] ?>
                            </a>
                        </li>
                        <li>
                            <a class="justify-between">
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="./includes/logout.inc.php">Logout</a>
                        </li>
                    </ul>
                </div>
            <?php else : ?>
                <a class="roboto-medium" href="./register.php">Register</a>
                <a class="roboto-medium" href="./login.php">Login</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
<!-- Nav Section End -->

<!-- Main Start -->
<main>
    <div>
        <div class="mx-auto text-center bg-slate-800 text-white mb-10 py-10">
            <h2 class="russo-one-regular">Write a Blog</h2>
            <p>Share your thought about a place at the capital of Bangladesh!</p>
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
            <label for="image">Photo Of the Place</label>
            <input type="file" name="image" id="image">
            <!-- Blog body -->
            <label for="body">Write your Blog: </label>
            <textarea name="comments" rows="20" placeholder="Write Here"></textarea><br>
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