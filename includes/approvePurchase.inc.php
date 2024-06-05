<?php
if (isset($_SESSION["user_role"])) {
    if ($_SESSION["user_role"] === "ADMIN") {
        $purchases = [];
        // Utility
        function farr($arr)
        {
            echo "<pre>";
            print_r($arr);
            echo "</pre>";
        }
        try {
            require_once __DIR__ . "/database/dbh.inc.php";
            require_once "approvePurchase_mvc/approvePurchase_model.inc.php";
            require_once "approvePurchase_mvc/approvePurchase_contr.inc.php";
            
            $purchases = getPurchases($pdo);
            farr($purchases);
        } catch (PDOException $e) {
            die("Query Failed: " . $e->getMessage());
        }
    } else {
        require_once "logout.inc.php";
    }
} else {
    header("Location: index.php");
    die();
}
