<?php
session_start(); //starts or resumes an existing session

error_reporting(E_ALL);
ini_set('display_errors', 'On');

// print_r($_POST); //for debugging purposes, display the content of the $_POST array

include '../../inc/dbConnection.php';

$conn = getDatabaseConnection("ottermart");

$username = $_POST['username'];
$password = sha1($_POST['password']);


$sql = "SELECT * FROM om_admin WHERE username = :username AND password = :password";

$namedParameters = array();
$namedParameters[':username'] = "$username";
$namedParameters[':password'] = "$password";

$stmt = $conn->prepare($sql);
echo "Hello\n";
$res = $stmt->execute($namedParameters);
if (!$res)
{
   debug($stmt->error);
}
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($records);
//  if (empty($record)) {
     
//      // echo "Username or Password are incorrect!";
//      // header("Location: login.php?LoginError=True");

     
//  }  else {
 
//     //echo $record[0]['firstName']; //using fetchAll
//     //echo $record['firstName'] . " " . $record['lastName'] ; //using fetch
    
//     // $_SESSION['adminName'] = $record['firstName'] . " " . $record['lastName'];
//     // header('location: admin.php'); //redirecting to a new file
    
    

// }

?>