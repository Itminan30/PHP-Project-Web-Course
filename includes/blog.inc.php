<?php
if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["blogID"])) {
    $blogID = $_GET["blogID"];
    $blog = [];
    // Utility
    function farr($arr)
    {
        echo "<pre>";
        echo print_r($arr);
        echo "</pre>";
    }

    try {
        require_once __DIR__ . "/database/dbh.inc.php";
        require_once "blog_mvc/blog_model.inc.php";
        require_once "blog_mvc/blog_contr.inc.php";
        require_once "blog_mvc/blog_view.inc.php";
        
        $blog = getBlog($pdo, $blogID);
        // farr($blog);
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
}
else {
    header("Location: ./index.php");
    die();
}