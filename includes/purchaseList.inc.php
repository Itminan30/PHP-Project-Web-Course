<?php
function farr($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
farr($_SESSION);
if (isset($_SESSION["user_id"]) && $_SESSION["user_role"] === "USER") {
    $userID = $_SESSION["user_id"];
    $purchases = [];

    try {
        require_once __DIR__ . "/database/dbh.inc.php";
        require_once "purchaseList_mvc/purchaseList_model.inc.php";
        require_once "purchaseList_mvc/purchaseList_contr.inc.php";

        $purchases = getPurchaseList($pdo, $userID);
        farr($purchases);
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ./index.php");
    die();
}
