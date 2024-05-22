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
                            <a class="justify-between" href="./myBlogs.php">
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