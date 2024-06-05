<!-- Session File Start -->
<?php
require_once __DIR__ . "/includes/config_session.inc.php";
require_once "includes/readMore_mvc/readMore_view.inc.php";
?>
<!-- Session File End -->

<!-- Head of HTML Document -->
<?php
$title = "Tour Packages";
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

<!-- Include INC file -->
<?php require "includes/tourPackage.inc.php" ?>
<!-- Include Database -->
<?php require_once  "includes/database/dbh.inc.php"; ?>

<main>
    <h2 class="text-center text-green-500">
        <?php check_readMore_errors() ?>
    </h2>
    <div class="top-destinations-cards py-10">

        <?php foreach ($allPackages as $package) : ?>
            <?php $places = getPlaces($pdo, $package["PACKAGE_ID"]) ?>
            <div class="card w-96 bg-base-100 shadow-xl">
                <figure><img src="<?php echo $package["PACKAGE_IMAGE"] ?>" alt="Shoes" /></figure>
                <!--modal-->
                <!-- Open the modal using ID.showModal() method -->
                <button class="btn" onclick="<?php echo str_replace(' ', '', $package["PACKAGE_NAME"]) ?>.showModal()">
                    <?php echo "{$package["PACKAGE_NAME"]}"; ?>
                </button>
                <dialog id="<?php echo str_replace(' ', '', $package["PACKAGE_NAME"]) ?>" class="modal">
                    <div class="modal-box">
                        <h3 class="font-bold text-lg">
                            <?php echo "{$package["PACKAGE_NAME"]} ({$package["TOUR_DURATION"]} days)"; ?>
                        </h3>
                        <br>
                        <div class="flex gap-4">
                            <img style="height: 220px; width: 150px;" src="images/lalbag.jpg" alt="">
                            <img style="height: 220px; width: 150px;" src="images/lalbagh 2nd.jpeg" alt="">
                            <img style="height: 220px; width: 150px;" src="images/ramna.jpg" alt="">
                        </div>
                        <div class="py-4">
                            <ul class="steps">
                                <?php foreach ($places as $place) : ?>
                                    <li class="step">
                                        <?php echo $place["PLACE_NAME"] ?>
                                    </li>
                                <?php endforeach ?>
                            </ul>

                            <div class="mt-5 ml-5">
                                <p>
                                    <span class="font-semibold">Transport Cost:</span> <?php echo $package["TRANSPORTATION_COST"] ?>TK
                                </p>
                                <p>
                                    <span class="font-semibold">Stay Cost:</span> <?php echo $package["STAY_COST"] ?>TK
                                </p>
                                <p>
                                    <span class="font-semibold">Food Cost:</span> <?php echo $package["FOOD_COST"] ?>TK
                                </p>
                                <p>
                                    <span class="font-semibold">Total Cost:</span> <?php echo $package["TOTAL_COST"] ?>TK
                                </p>
                            </div>
                        </div>
                        <div class="modal-action">
                            <form method="dialog">
                                <!-- if there is a button in form, it will close the modal -->
                                <button class="btn">
                                    <a href="readMore.php?package=<?php echo $package["PACKAGE_ID"] ?>" style="color: rgb(248, 63, 63);font-weight: bold;">
                                        Read more
                                    </a>
                                </button>
                                <button class="btn">Close</button>
                            </form>
                        </div>
                    </div>
                </dialog>
            </div>
        <?php endforeach ?>

    </div>

</main>

<!-- Footer Section Start -->
<?php
$CSSPath = "./css/style.css";
require "common/footer.php";
?>
<!-- Footer Section End -->