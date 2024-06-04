<?php
$allBlogs = [];
try {
    require_once __DIR__ . "/database/dbh.inc.php";
    require_once "blogPage_mvc/blogPage_model.inc.php";
    require_once "blogPage_mvc/blogPage_contr.inc.php";

    $allBlogs = getAllBlogs($pdo);
} catch (PDOException $e) {
    die("Query Failed: " . $e->getMessage());
}
