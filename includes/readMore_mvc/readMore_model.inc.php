<?php
function getPackage($pdo, $packageID)
{
    $query = "SELECT * FROM PACKAGE_INFO WHERE PACKAGE_ID = :id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $packageID);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function getPlaces($pdo, $PACKAGE_ID)
{
    $query = "SELECT * FROM PACKAGE_PLACES WHERE PACKAGE_ID = :id ;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $PACKAGE_ID);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function purchasePackage($pdo, $packageID, $userID, $personCount, $startDate) {
    $query = "INSERT INTO purchase_info (PACKAGE_ID, USER_ID, PEOPLE_COUNT, START_DATE) VALUES (:packageID, :userID, :personCount, :startDate);";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":packageID", $packageID);
    $stmt->bindParam(":userID", $userID);
    $stmt->bindParam(":personCount", $personCount);
    $stmt->bindParam(":startDate", $startDate);
    
    $stmt->execute();
}
