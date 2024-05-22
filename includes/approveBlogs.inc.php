<?php
if (isset($_SESSION["user_role"])) {
    if ($_SESSION["user_role"] === "ADMIN") {
        $blogs = [];
        // Utility
        function farr($arr)
        {
            echo "<pre>";
            print_r($arr);
            echo "</pre>";
        }
        try {
            require_once __DIR__ . "/database/dbh.inc.php";
            require_once "approveBlogs_mvc/approveBlogs_model.inc.php";
            require_once "approveBlogs_mvc/approveBlogs_contr.inc.php";
            $blogs = getBlogs($pdo);
            // farr($blogs);
        } catch (PDOException $e) {
            die("Query Failed: " . $e->getMessage());
        }
    } else {
        require_once "logout.inc.php";
        // header("Location: index.php");
        // die();
    }
} else {
    header("Location: index.php");
    die();
}
