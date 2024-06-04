<?php
function getAllBlogs($pdo) {
    $query = "SELECT * FROM BLOGS WHERE APPROVAL = 'APPROVED';";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}