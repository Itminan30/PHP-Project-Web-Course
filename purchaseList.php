<!-- Session File Start -->
<?php
require_once __DIR__ . "/includes/config_session.inc.php";
?>
<!-- Session File End -->

<!-- Head of HTML Document -->
<?php
$title = "Purchase List";
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

<!-- Require INC file -->
<?php require "includes/purchaseList.inc.php" ?>
<!--  -->

<!-- Main Section Start -->
<main>
    <div>
        <h1 class="text-3xl font-bold text-center">
            Purchase List
        </h1>
    </div>
    <div class="border border-gray-500 mt-20 mb-36">
        <div class="overflow-x-auto">
            <table class="table table-xs">
                <thead>
                    <tr>
                        <th>Purchase ID</th>
                        <th>Package Name</th>
                        <th>People</th>
                        <th>Date</th>
                        <th>Transportation Cost</th>
                        <th>Entry Fee</th>
                        <th>Stay Cost</th>
                        <th>Food Cost</th>
                        <th>Total Cost</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($purchases as $purchase) : ?>
                        <tr>
                            <th><?php echo $purchase["PURCHASE_ID"] ?></th>
                            <td><?php echo $purchase["PACKAGE_NAME"] ?></td>
                            <td><?php echo $purchase["PEOPLE_COUNT"] ?></td>
                            <td><?php echo $purchase["START_DATE"] ?></td>
                            <td><?php echo $purchase["TRANSPORTATION_COST"] ?></td>
                            <td><?php echo $purchase["ENTRY_FEE"] ?></td>
                            <td><?php echo $purchase["STAY_COST"] ?></td>
                            <td><?php echo $purchase["FOOD_COST"] ?></td>
                            <td><?php echo $purchase["TOTAL_COST"] ?></td>
                            <?php if ($purchase["STATUS"] === "PENDING") : ?>
                                <td class="bg-gray-500 text-white"><?php echo $purchase["STATUS"] ?></td>
                            <?php elseif ($purchase["STATUS"] === "APPROVED") : ?>
                                <td class="bg-green-500 text-white">
                                    <?php echo $purchase["STATUS"] ?> <br>
                                    
                                        <a href="includes/createPDF.inc.php?id=<?php echo $purchase["PURCHASE_ID"]?>">
                                            Download Invoice
                                        </a>
                                </td>
                            <?php elseif ($purchase["STATUS"] === "DENIED") : ?>
                                <td class="bg-red-500 text-white"><?php echo $purchase["STATUS"] ?></td>
                            <?php endif ?>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<!-- Main Section End -->

<!-- Footer Section Start -->
<?php
$CSSPath = "./css/style.css";
require "common/footer.php";
?>
<!-- Footer Section End -->