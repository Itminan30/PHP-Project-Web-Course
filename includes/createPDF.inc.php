<?php
require "fpdf/fpdf.php";
try {
    require_once "./database/dbh.inc.php";
    function getPurchaseData($id)
    {
        $pdo = $GLOBALS["pdo"];
        $query = "SELECT * FROM PURCHASE_INFO WHERE PURCHASE_ID = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    $data = (getPurchaseData($_GET["id"]))[0];
    function getClientData($id)
    {
        $pdo = $GLOBALS["pdo"];
        $query = "SELECT * FROM users WHERE ID = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    $client = (getClientData($data["USER_ID"]))[0];
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";

    $clientName = $client["USER_NAME"];
    $clientEmail = $client["EMAIL"];
    $clientPhone = $client["PHONE_NUMBER"];
    $purchaseID = $data["PURCHASE_ID"];
    $packageName = $data["PACKAGE_NAME"];
    $peopleCount = $data["PEOPLE_COUNT"];
    $startDate = $data["START_DATE"];
    $transportationCost = $data["TRANSPORTATION_COST"];
    $entryFee = $data["ENTRY_FEE"];
    $stayCost = $data["STAY_COST"];
    $foodCost = $data["FOOD_COST"];
    $totalCost = $data["TOTAL_COST"];

    // Create PDF
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    
    // Add title
    $pdf->Cell(0, 10, 'Invoice', 0, 1, 'C');
    $pdf->Ln(10);
    
    // Add client details
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, 'Client Information', 0, 1, 'L');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(50, 10, 'Name:');
    $pdf->Cell(50, 10, $clientName, 0, 1);
    $pdf->Cell(50, 10, 'Email:');
    $pdf->Cell(50, 10, $clientEmail, 0, 1);
    $pdf->Cell(50, 10, 'Phone:');
    $pdf->Cell(50, 10, $clientPhone, 0, 1);
    $pdf->Ln(10);
    
    // Add package details
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, 'Package Information', 0, 1, 'L');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(50, 10, 'Package Name:');
    $pdf->Cell(50, 10, $packageName, 0, 1);
    $pdf->Cell(50, 10, 'Purchase ID:');
    $pdf->Cell(50, 10, $purchaseID, 0, 1);
    $pdf->Cell(50, 10, 'People:');
    $pdf->Cell(50, 10, $peopleCount, 0, 1);
    $pdf->Cell(50, 10, 'Date:');
    $pdf->Cell(50, 10, $startDate, 0, 1);
    $pdf->Ln(10);
    
    // Add cost details
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, 'Cost Details', 0, 1, 'L');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(50, 10, 'Transportation Cost:');
    $pdf->Cell(50, 10, '$' . number_format($transportationCost, 2), 0, 1);
    $pdf->Cell(50, 10, 'Stay Cost:');
    $pdf->Cell(50, 10, '$' . number_format($stayCost, 2), 0, 1);
    $pdf->Cell(50, 10, 'Food Cost:');
    $pdf->Cell(50, 10, '$' . number_format($foodCost, 2), 0, 1);
    $pdf->Cell(50, 10, 'Entry Fee:');
    $pdf->Cell(50, 10, '$' . number_format($entryFee, 2), 0, 1);
    $pdf->Ln(10);
    
    // Add total cost
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 10, 'Total Cost:');
    $pdf->Cell(50, 10, '$' . number_format($totalCost, 2), 0, 1);
    
    // Output the PDF for download
    $pdf->Output('D', 'invoice.pdf'); // 'D' stands for download
    
} catch (PDOException $e) {
    die("Query Failed: " . $e->getMessage());
}

