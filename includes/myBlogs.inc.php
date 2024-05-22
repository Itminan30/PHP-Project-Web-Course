<?php
if (isset($_SESSION["user_id"])) {
    $id = $_SESSION["user_id"];
    $myBlogs = [];
    // Utility
    function farr($arr)
    {
        echo "<pre>";
        echo print_r($arr);
        echo "</pre>";
    }

    try {
        require_once __DIR__ . "/database/dbh.inc.php";
        require_once "myBlogs_mvc/myBlogs_model.inc.php";
        require_once "myBlogs_mvc/myBlogs_contr.inc.php";

        $myBlogs = getBlogs($pdo, $id);
        // farr($myBlogs);
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
}
else {
    header("Location: ./index.php");
    die();
}
