<!-- Session File Start -->
<?php
require_once __DIR__ . "/includes/config_session.inc.php";
require_once __DIR__ . "/includes/login_mvc/login_view.inc.php";
?>
<!-- Session File End -->

<!-- Head of HTML Document -->
<?php
$title = "Login";
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

<!-- Main Start -->
<main>
    <div class="w-1/4 border border-gray-400-200 rounded-md p-10 mx-auto my-10">
        <p class="text-2xl font-semibold border-b-2 border-t-2 text-center p-2 my-2">
            Login
        </p>
        <!-- Login Form Start -->
        <form action="./includes/login.inc.php" method="post" class="flex flex-col space-y-2 mx-auto border-lime-200 ">
            <!-- Email Start -->
            <div>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text font-semibold text-base">Email:</span>
                    </div>
                    <input type="email" name="email" id="email" placeholder="Your Email" required class="input input-bordered w-full max-w-xs">
                </label>
            </div>
            <!-- Email End -->

            <!-- Password Start -->
            <div>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text font-semibold text-base">Password:</span>
                    </div>
                    <input type="password" name="password" id="password" placeholder="Your Password" required class="input input-bordered w-full max-w-xs">
                </label>
            </div>
            <!-- Password End -->

            <!-- Utility Start -->
            <div class="text-sm">
                Don't Have an Account? <span class="text-red-400 font-semibold"><a href="./register.php">Register</a></span>
            </div>
            <!-- Utility End -->

            <!-- Error Div Start -->
            <div class="text-pink-500">
                <?php
                show_login_errors()
                ?>
                <?php
                if(isset($_SESSION["flash_message"])){
                    echo $_SESSION["flash_message"];
                    unset($_SESSION["flash_message"]);
                }
                ?>
            </div>
            <!-- Error Div End -->

            <!-- Submit Button -->
            <div class="border-sky-200 flex justify-start">
                <button type="submit" class="btn btn-outline">Login</button>
            </div>
        </form>
        <!-- Login Form End -->
    </div>
</main>
<!-- Main End -->

<!-- Footer Section Start -->
<?php
$CSSPath = "./css/style.css";
require "common/footer.php";
?>
<!-- Footer Section End -->