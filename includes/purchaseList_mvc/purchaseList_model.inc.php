<?php

function getPurchaseList($pdo, $id) {
    $query = $query = "SELECT * FROM PURCHASE_INFO WHERE USER_ID = :id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}
