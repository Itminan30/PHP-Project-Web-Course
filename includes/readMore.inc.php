<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET["package"])) {
        $packageID = $_GET["package"];
        $packageInfo = [];
        $places = [];
        // Utility
        function farr($arr)
        {
            echo "<pre>";
            echo print_r($arr);
            echo "</pre>";
        }

        try {
            require_once __DIR__ . "/database/dbh.inc.php";
            require_once "readMore_mvc/readMore_model.inc.php";
            require_once "readMore_mvc/readMore_contr.inc.php";

            $packageInfo = (getPackage($pdo, $packageID))[0];
            $places = getPlaces($pdo, $packageID);
            
        } catch (PDOException $e) {
            die("Query Failed: " . $e->getMessage());
        }
    } else {
        header("Location: ./index.php");
        die();
    }
} else if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Start Session
    require_once __DIR__ . "/config_session.inc.php";
    // Get Input
    $personCount = $_POST["personCount"];
    $startDate = $_POST["startDate"];
    $packageID = $_POST["packageID"];
    $packageName = $_POST["packageName"];
    $userID = $_SESSION["user_id"];
    $transportationCost = $_POST["transportationCost"] * $personCount;
    $entryFee = $_POST["entryFee"] * $personCount;
    $stayCost = $_POST["stayCost"] * $personCount;
    $foodCost = $_POST["foodCost"] * $personCount;

    if (isset($_SESSION) && $_SESSION["user_role"] !== "ADMIN") {
        try {
            require_once __DIR__ . "/database/dbh.inc.php";
            require_once "readMore_mvc/readMore_model.inc.php";
            require_once "readMore_mvc/readMore_contr.inc.php";

            // Errors array 
            $errors = [];

            // Handling Empty Error
            if (is_input_empty($personCount, $startDate)) {
                $errors["empty_input"] = "Fillup All The Fields";
            }

            if ($errors) {
                $_SESSION["readMore_error"] = $errors;
                farr($errors);
                header("Location: ../readMore.php?package={$packageID}");
                die();
            }

            purchasePackage($pdo, $packageID, $packageName, $userID, $personCount, $startDate, $transportationCost, $entryFee, $stayCost, $foodCost);
            header("Location: ../tourPackage.php?purchase=Success");
            die();

        } catch (PDOException $e) {
            die("Query Failed: " . $e->getMessage());
        }
    } else {
        header("Location: ../index.php");
        die();
    }
}
