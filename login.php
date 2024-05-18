<?php
require_once __DIR__ . "/includes/config_session.inc.php";
require_once __DIR__ . "/includes/login_mvc/login_view.inc.php";
?>

<?php
require __DIR__ . "/common/header.php";
?>

<?php
require __DIR__ . "/common/navbar.php";
?>

<main>
    <div class="w-1/4 border border-gray-400-200 rounded-md p-10 mx-auto my-10">
        <p class="text-2xl font-semibold border-b-2 border-t-2 text-center p-2 my-2">
            Login
        </p>
        <form action="./includes/login.inc.php" method="post" class="flex flex-col space-y-2 mx-auto border-lime-200 ">
            <div>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text font-semibold text-base">Email:</span>
                    </div>
                    <input type="email" name="email" id="email" placeholder="Your Email" required class="input input-bordered w-full max-w-xs">
                </label>
            </div>

            <div>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text font-semibold text-base">Password:</span>
                    </div>
                    <input type="password" name="password" id="password" placeholder="Your Password" required class="input input-bordered w-full max-w-xs">
                </label>
            </div>
            <div class="text-sm">
                Don't Have an Account? <span class="text-red-400 font-semibold"><a href="./register.php">Register</a></span>
            </div>
            <!-- Submit Button -->
            <div class="border-sky-200 flex justify-start">
                <button type="submit" class="btn btn-outline">Login</button>
            </div>
        </form>
    </div>

    <div>
        <?php
        show_login_errors()
        ?>
    </div>
</main>

<!--Footer Part-->
<?php
require __DIR__ . "/common/footer.php";
?>