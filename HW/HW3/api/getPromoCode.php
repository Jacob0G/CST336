<?php
include '../../../inc/dbConnection.php';
$conn = getDatabaseConnection("midtermP");
$namedParameters = array();
$promoCode = $_GET['promoCode'];
// print_r($promoCode);
$sql = "SELECT * FROM mp_codes WHERE 1"; //Retrieves ALL records
if (!empty($promoCode)) { //user entered a product keyword
    $sql .=  " AND promoCode LIKE :promoCode";
    $namedParameters[":promoCode"] = "%$promoCode%";
}
$stmt = $conn -> prepare($sql);  //$connection MUST be previously initialized
$stmt->execute($namedParameters);
$records = $stmt->fetchAll(PDO::FETCH_ASSOC); //use fetch for one record, fetchAll for multiple

// print_r($records); //debugging    
echo json_encode($records);
?>