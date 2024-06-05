<?php
function getPurchases($pdo) {
    $query = "SELECT * FROM PURCHASE_INFO WHERE STATUS = 'PENDING';";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}