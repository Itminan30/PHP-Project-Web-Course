<?php
$allPackages = [];
try {
    require_once __DIR__ . "/database/dbh.inc.php";
    require_once "tourPackage_mvc/tourPackage_model.inc.php";
    require_once "tourPackage_mvc/tourPackage_contr.inc.php";

    $allPackages = getAllPackages($pdo);
} catch (PDOException $e) {
    die("Query Failed: " . $e->getMessage());
}