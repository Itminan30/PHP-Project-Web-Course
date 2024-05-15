<?php
require_once __DIR__ . "/includes/config_session.inc.php";
require_once __DIR__ . "/includes/register_mvc/register_view.inc.php";
?>

<?php
require __DIR__ . "/includes/common/header.php";
?>

<?php
require __DIR__ . "/includes/common/navbar.php";
?>
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
            <div class="text-sm">
                Already Have an Account? <span class="text-red-400 font-semibold"><a href="./login.php">Login</a></span>
            </div>
            <!-- Submit Button -->
            <div class="border-sky-200 flex justify-start">
                <button type="submit" class="btn btn-outline">Create Account</button>
            </div>
        </form>
    </div>
    <div>
        <?php
        check_register_errors();
        ?>
    </div>
</main>

<!--Footer Part-->
<?php
require __DIR__ . "/includes/common/footer.php";
?>