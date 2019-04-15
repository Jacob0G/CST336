<?php
session_start();
//TODO: Save incoming data into session
//session_destroy();

    $arr[":name"] = $_GET["name"];
    $arr[":email"] = $_GET["email"];
    $arr[":progress"] = $_GET["progress"];
    
    
    // $sql = "INSERT INTO newsletter ( `name`, `email`) 
    // VALUES (:name, :email)";
   
    // $stmt = $conn->prepare($sql);
    // $stmt->execute($arr);
    // $sql ="SELECT COUNT(1) totalproducts FROM newsletter";
    // $stmt = $conn->prepare($sql);
    // $stmt->execute();
    // $records = $stmt->fetch(PDO::FETCH_ASSOC);
    // echo json_encode($records);
    
    
if(!isset($_SESSION["progress"])){
    $_SESSION["progress"] = 0;
}else{
    $_SESSION = $arr;
}
echo json_encode($_SESSION);
?>