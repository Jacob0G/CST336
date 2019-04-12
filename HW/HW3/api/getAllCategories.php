<?php
    include '../../../inc/dbConnection.php';
    $conn = getDatabaseConnection("hw3");
    $sql = "SELECT category FROM hw3_category ORDER BY category";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($records);
?>