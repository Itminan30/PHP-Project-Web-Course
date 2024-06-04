<?php
function getAllPackages($pdo) {
    $query = "SELECT * FROM PACKAGE_INFO ;";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function getPlaces($pdo, $PACKAGE_ID) {
    $query = "SELECT * FROM PACKAGE_PLACES WHERE PACKAGE_ID = :id ;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $PACKAGE_ID);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}