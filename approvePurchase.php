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
<?php require "includes/approvePurchase.inc.php" ?>
<!--  -->

<!-- Main Start -->
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
                        <th>User ID</th>
                        <th>Total Cost</th>
                        <th>Approve Purchase</th>
                        <th>Deny Purchase</th>
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
                            <td><?php echo $purchase["USER_ID"] ?></td>
                            <td><?php echo $purchase["TOTAL_COST"] ?></td>
                            <td>
                                <a href="includes/approvePurchase_mvc/approve.inc.php?id=<?php echo $purchase["PURCHASE_ID"] ?>">
                                    <button class="btn btn-success">Approve</button>
                                </a>
                            </td>
                            <td>
                                <a href="includes/approvePurchase_mvc/deny.inc.php?id=<?php echo $purchase["PURCHASE_ID"] ?>">
                                    <button class="btn btn-error">Deny</button>
                                </a>
                            </td>
                            <td class="bg-gray-500 text-white"><?php echo $purchase["STATUS"] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<!-- Main End -->

<!-- Footer Section Start -->
<?php
$CSSPath = "./css/style.css";
require "common/footer.php";
?>
<!-- Footer Section End -->