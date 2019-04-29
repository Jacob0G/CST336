<?php
include '../../../inc/dbConnection.php';
$conn = getDatabaseConnection("c9");
$sql = "SELECT * FROM `lab8_pixabay` ";
$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($records);
?>