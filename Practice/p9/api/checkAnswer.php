<?php
include 'dbConnection.php';
$conn = getDatabaseConnection("p9");
$namedParameters = array();
$sql = "SELECT * FROM quiz WHERE email = :email";

$email = $_GET['email'];
$points = $_GET['points'];

$namedParameters[':email'] = $email;
$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);

$record = $stmt->fetch(PDO::FETCH_ASSOC); //we are expecting ONLY one record, so we use fetch instead of fetchAll
$preScore = $record['score'];
if(!empty($record)){
 $namedParameters[':taken'] = $record['taken'] + 1;
 $namedParameters[':points'] = $points;
 $sql = 'UPDATE `quiz` SET `score` = :points, `taken` = :taken WHERE `quiz`.`email` = :email';
 $stmt = $conn->prepare($sql);
 $stmt->execute($namedParameters);
 // $record = $stmt->fetch(PDO::FETCH_ASSOC);
 $namedParameters[':points'] = $preScore;
 echo json_encode($namedParameters);
}
else{
  // print_r("here");
 $namedParameters[':points'] = $points;
 $sql = 'INSERT INTO `quiz` (`email`, `score`, `taken`) VALUES (:email, :points, 1)';
 $stmt = $conn->prepare($sql);
 $stmt->execute($namedParameters);
 $record = $stmt->fetch(PDO::FETCH_ASSOC); //we are expecting ONLY one record, so we use fetch instead of fetchAll
 echo json_encode($record);

}
// print_r($record);



?>