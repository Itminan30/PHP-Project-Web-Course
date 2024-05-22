<?php

function getBlogs($pdo, $id) {
    $query = $query = "SELECT * FROM BLOGS WHERE WRITER_ID = :id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}