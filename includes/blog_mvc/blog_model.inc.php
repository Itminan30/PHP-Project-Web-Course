<?php

function getBlog($pdo, $id) {
    $query = $query = "SELECT * FROM BLOGS WHERE BLOG_ID = :id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}