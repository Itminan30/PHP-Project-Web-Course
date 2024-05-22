<?php
function getBlogs($pdo) {
    $query = "SELECT * FROM BLOGS WHERE APPROVAL = 'PENDING';";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}