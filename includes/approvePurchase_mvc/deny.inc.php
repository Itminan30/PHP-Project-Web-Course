<?php
try {
    require_once "../database/dbh.inc.php";
    function approvePurchase($id)
    {
        $pdo = $GLOBALS["pdo"];
        $query = "UPDATE PURCHASE_INFO SET STATUS = 'DENIED' WHERE PURCHASE_ID = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
    approvePurchase($_GET["id"]);
    header("Location: ../../approvePurchase.php?status=denied");
} catch (PDOException $e) {
    die("Query Failed: " . $e->getMessage());
}

