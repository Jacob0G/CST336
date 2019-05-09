<?php
include '../../../inc/dbConnection.php';
$conn = getDatabaseConnection("heroku_a0456bbcdb0a1a4");
$sql = "SELECT * FROM `hw4_flick` ";
$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($records);
?>
