<?php
require_once __DIR__ . "/includes/config_session.inc.php";
require_once __DIR__ . "/includes/register_mvc/register_view.inc.php";
?>
<!-- Session File End -->

<!-- Head of HTML Document -->
<?php
$title = "Register";
require "common/head.php";
?>
<!--  -->

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
            <a class="roboto-medium" href="./blogPage.php">Blog</a>
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
                <a class="roboto-medium" style="color: rgb(207, 24, 24);" href="./register.php">Register</a>
                <a class="roboto-medium" href="./login.php">Login</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
<!-- Nav Section End -->

<!-- Main Section Start -->
<main>
    <div class="w-fit border border-gray-400-200 rounded-md p-10 mx-auto my-10">
        <p class="text-2xl font-semibold border-b-2 border-t-2 text-center p-2 my-2">
            Register
        </p>
        <form action="./includes/register.inc.php" method="post" enctype="multipart/form-data" class="flex flex-col space-y-2 mx-auto border-lime-200">
            <!-- User name -->
            <div class="flex gap-10">
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text font-semibold text-base">Username: </span>
                    </div>
                    <input type="text" name="username" placeholder="Your Username" id="username" required class="input input-bordered w-full max-w-xs">
                </label>
                <!-- email -->
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text font-semibold text-base">Email:</span>
                    </div>
                    <input type="email" name="email" id="email" placeholder="Your Email" required class="input input-bordered w-full max-w-xs">
                </label>
            </div>

            <div class="flex gap-10">
                <!-- password -->
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text font-semibold text-base">Password:</span>
                    </div>
                    <input type="password" name="password" id="password" placeholder="Your Password" required class="input input-bordered w-full max-w-xs">
                </label>
                <!-- phone -->
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text font-semibold text-base">Phone: </span>
                    </div>
                    <input type="tel" name="phone" id="phone" placeholder="Your Phone Number" required class="input input-bordered w-full max-w-xs">
                </label>
            </div>
            <div class="flex gap-10">
                <!-- address -->
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text font-semibold text-base">Address: </span>
                    </div>
                    <input type="text" name="address" id="address" placeholder="Your Address" required class="input input-bordered w-full max-w-xs">
                </label>
                <!-- dob -->
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text font-semibold text-base">Date of Birth: </span>
                    </div>
                    <input type="date" name="dob" id="dob" required class="input input-bordered w-full max-w-xs">
                </label>
            </div>
            <!-- photo url -->
            <div>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text font-semibold text-base">Pick a file</span>
                    </div>
                    <input type="file" name="photo" id="photo" accept="image/*" placeholder="Photo" class="file-input file-input-bordered w-full max-w-xs">
                </label>
            </div>

            <!-- Utility Start -->
            <div class="text-sm">
                Already Have an Account? <span class="text-red-400 font-semibold"><a href="./login.php">Login</a></span>
            </div>
            <!-- Utility End -->

            <!-- Register Error Start -->
            <div>
                <?php
                check_register_errors();
                ?>
            </div>
            <!-- Register Error End -->

            <!-- Submit Button -->
            <div class="border-sky-200 flex justify-start">
                <button type="submit" class="btn btn-outline">Create Account</button>
            </div>
        </form>
    </div>
</main>
<!-- Main Section End -->

<!-- Footer Section Start -->
<?php
$CSSPath = "./css/style.css";
require "common/footer.php";
?>
<!-- Footer Section End -->