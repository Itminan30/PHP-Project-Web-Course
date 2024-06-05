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

function purchasePackage($pdo, $packageID, $packageName, $userID, $personCount, $startDate, $transportationCost, $entryFee, $stayCost, $foodCost) {
    $query = "INSERT INTO purchase_info (PACKAGE_ID, PACKAGE_NAME, USER_ID, PEOPLE_COUNT, START_DATE, TRANSPORTATION_COST, ENTRY_FEE, STAY_COST, FOOD_COST) VALUES (:packageID, :packageName, :userID, :personCount, :startDate, :transportationCost, :entryFee, :stayCost, :foodCost);";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":packageID", $packageID);
    $stmt->bindParam(":packageName", $packageName);
    $stmt->bindParam(":userID", $userID);
    $stmt->bindParam(":personCount", $personCount);
    $stmt->bindParam(":startDate", $startDate);
    $stmt->bindParam(":transportationCost", $transportationCost);
    $stmt->bindParam(":entryFee", $entryFee);
    $stmt->bindParam(":stayCost", $stayCost);
    $stmt->bindParam(":foodCost", $foodCost);
    
    $stmt->execute();
}
