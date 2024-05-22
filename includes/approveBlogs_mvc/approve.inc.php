<?php

try {
    require_once "../database/dbh.inc.php";
    function approveBlog($id)
    {
        $pdo = $GLOBALS["pdo"];
        $query = "UPDATE BLOGS SET APPROVAL = 'APPROVED' WHERE BLOG_ID = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
    approveBlog($_GET["id"]);
    header("Location: ../../approveBlogs.php");
} catch (PDOException $e) {
    die("Query Failed: " . $e->getMessage());
}

