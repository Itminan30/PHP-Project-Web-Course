<!-- Session File Start -->
<?php
require_once __DIR__ . "/includes/config_session.inc.php";
require_once "includes/readMore_mvc/readMore_view.inc.php";
// Check if user is logged in
function checkLogin($email)
{
    if (!isset($email)) {
        $_SESSION["flash_message"] = "User Must Be Logged In Read More About a Package!!!";
        header("Location: ./login.php");
        die();
    }
}
checkLogin($_SESSION["user_email"]);
?>
<!-- Session File End -->

<!-- Head of HTML Document -->
<?php
$title = "Home";
require "common/head.php";
?>
<!--  -->

<!-- Header Section Start -->
<?php
require "common/header.php";
?>
<!-- Header Section End -->

<!-- Require INC file -->
<?php require "includes/readMore.inc.php" ?>

<!-- Nav Section Start -->
<?php require "common/navbar.php" ?>
<!-- Nav Section End -->
<form class="my-10" method="POST" action="includes/readMore.inc.php">
    <div class="grid grid-cols-2">
        <!-- Left Side of screen -->
        <div>
            <img class="object-fit w-full" src="<?php echo $packageInfo["PACKAGE_IMAGE"] ?>" alt="<?php echo $packageInfo["PACKAGE_NAME"] ?>">
        </div>
        <!-- End -->

        <!-- Right Side of Screen -->
        <div class="space-y-7 py-5">
            <!-- Heading -->
            <h2 class="text-center font-bold text-3xl underline">
                <?php echo $packageInfo["PACKAGE_NAME"] ?>
            </h2>
            <h2 class="text-center text-red-500">
                <?php check_readMore_errors() ?>
            </h2>
            <!-- Heading End -->

            <!-- Place List Start -->
            <div class="px-5 space-y-5">
                <h3 class="font-semibold text-2xl">
                    Place Lists:
                </h3>
                <?php $count = 0 ?>
                <ul class="timeline timeline-vertical w-fit">
                    <?php foreach ($places as $place) : ?>
                        <li>
                            <?php if ($count % 2 === 0) : ?>
                                <hr />
                                <div class="timeline-start timeline-box">
                                    <?php echo $place["PLACE_NAME"] ?>
                                </div>
                                <hr />
                            <?php else : ?>
                                <hr />
                                <div class="timeline-end timeline-box">
                                    <?php echo $place["PLACE_NAME"] ?>
                                </div>
                                <hr />
                            <?php endif ?>
                        </li>
                        <?php $count++ ?>
                    <?php endforeach ?>
                </ul>
            </div>
            <!-- Place List End -->

            <!-- Pricing Start -->
            <div class="px-5 space-y-4">
                <h3 class="font-semibold text-2xl">
                    Price Lists:
                </h3>
                <div class="space-y-2 px-3">
                    <p>
                        <span class="font-semibold">
                            Transportation Cost:
                        </span> <?php echo $packageInfo["TRANSPORTATION_COST"] ?>TK
                    </p>
                    <p>
                        <span class="font-semibold">
                            Entry Fee:
                        </span> <?php echo $packageInfo["ENTRY_FEE"] ?>TK
                    </p>
                    <p>
                        <span class="font-semibold">
                            Stay Cost:
                        </span> <?php echo $packageInfo["STAY_COST"] ?>TK
                    </p>
                    <p>
                        <span class="font-semibold">
                            Food Cost:
                        </span> <?php echo $packageInfo["FOOD_COST"] ?>TK
                    </p>
                    <p>
                        <span class="font-semibold">
                            Total Cost:
                        </span> <?php echo $packageInfo["TOTAL_COST"] ?>TK
                    </p>
                </div>
            </div>
            <!-- Pricing End -->

            <!-- Transportation Method Start -->
            <div class="px-5 space-y-4">
                <p class=" text-xl">
                    <span class="font-semibold">
                        Tranportation Method:
                    </span> <?php echo $packageInfo["TRANSPORTATION_NAME"] ?>
                </p>
            </div>
            <!-- Tranportation Method End -->

            <!-- Residence Start -->
            <div class="px-5 space-y-4">
                <p class=" text-xl">
                    <span class="font-semibold">
                        Residence Fascility:
                    </span> <?php echo $packageInfo["RESIDENCE"] ?>
                </p>
            </div>
            <!-- Residence End -->

            <!-- Duration Start -->
            <div class="px-5 space-y-4">
                <p class=" text-xl">
                    <span class="font-semibold">
                        Tour Duration:
                    </span> <?php echo $packageInfo["TOUR_DURATION"] ?> days
                </p>
            </div>
            <!-- Duration End -->

            <!-- Person Count Start -->
            <div class="px-5 space-y-4">
                <label for="person" class="text-xl font-semibold">Person Count: </label>
                <input type="number" max="10" min="1" value=1 id="person" class="input input-bordered w-full max-w-xs" name="personCount">
                <input type="hidden" name="packageID" value="<?php echo $packageInfo["PACKAGE_ID"] ?>">
                <input type="hidden" name="packageName" value="<?php echo $packageInfo["PACKAGE_NAME"] ?>">
                <input type="hidden" name="transportationCost" value="<?php echo $packageInfo["TRANSPORTATION_COST"] ?>">
                <input type="hidden" name="entryFee" value="<?php echo $packageInfo["ENTRY_FEE"] ?>">
                <input type="hidden" name="stayCost" value="<?php echo $packageInfo["STAY_COST"] ?>">
                <input type="hidden" name="foodCost" value="<?php echo $packageInfo["FOOD_COST"] ?>">
            </div>
            <!-- Person Count End -->

            <!-- Date Start -->
            <div class="px-5 space-y-4">
                <label for="date" class="text-xl font-semibold">Start Date: </label>
                <input type="date" max="10" min="<?php echo date("Y-m-d", strtotime("tomorrow")) ?>" value=1 id="date" class="input input-bordered w-full max-w-xs" name="startDate">
            </div>
            <!-- Date End -->

            <!-- Button Start -->
            <div class="px-5 space-y-4">
                <button class="btn btn-success" type="submit">
                    Purchase Package
                </button>
            </div>
            <!-- Button End -->
        </div>
        <!-- End -->
    </div>
</form>
<!-- Main Section Start -->
<main>

</main>
<!-- Main Section End -->

<!-- Footer Section Start -->
<?php
$CSSPath = "./css/style.css";
require "common/footer.php";
?>
<!-- Footer Section End -->