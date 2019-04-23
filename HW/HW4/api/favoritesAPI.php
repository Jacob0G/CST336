<?php
include '../../../inc/dbConnection.php';
$conn = getDatabaseConnection("c9");

//receives these parameters: action, url, keyword
$action = $_GET['action'];

  switch ($action) {
      case "add":
          $action = $_GET['action'];
          $url = $_GET['url'];
          $keyword = $_GET['keyword'];
          date_default_timezone_set("America/Los_Angeles");
          $date = date("Y-m-d h:i:s");
                $namedParameters= array();
                $sql = "INSERT INTO `hw4_flick` (`id`, `imageURL`, `keyword`, `timestamp`) 
                VALUES (NULL, :imageURL, :keyword, :date)";
                $namedParameters[':imageURL'] = $url;
                $namedParameters[':keyword'] = $keyword;
                $namedParameters[':date'] = $date;
                
                $stmt = $conn->prepare($sql);
                $stmt->execute($namedParameters);
                // $records = $stmt->fetch(PDO::FETCH_ASSOC);
                // echo json_encode($records);
                break;

      case "delete":
                $namedParameters= array();
                $url = $_GET['url'];
                $sql = "DELETE FROM `hw4_flick` WHERE imageURL = :imageURL";
                $namedParameters[':imageURL'] = "$url";
                
                $stmt = $conn->prepare($sql);
                $stmt->execute($namedParameters);
                // $records = $stmt->fetch(PDO::FETCH_ASSOC);
                echo $namedParameters[':imageURL'];
                break;
                 
      
  }//switch

?>