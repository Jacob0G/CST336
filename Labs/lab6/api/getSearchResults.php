<?php

include '../../../inc/dbConnection.php';
$conn = getDatabaseConnection("ottermart");
$namedParameters = array();
$product = $_GET['product'];
$category = $_GET['category'];
$priceFrom = $_GET['priceFrom'];
$priceTo = $_GET['priceTo'];
$orderBy = $_GET['orderBy'];

$sql = "SELECT * FROM `om_product` WHERE 1"; //Retrieves ALL records

//check if user has type in "product" text box
if (!empty($product)) { //user entered a product keyword
    $sql .=  " AND productName LIKE :product";
    $namedParameters[":product"] = "%$product%";
}
// //check whether user has selected a category of product
if(!empty($category)){
    $sql .= " AND catId = :categoryId";
    $namedParameters[":categoryId"] = $category;
}
// //check whether user has selected a priceFrom
if(!empty($priceFrom)){
    $sql .= " AND productPrice >= :priceFrom";
    $namedParameters[":priceFrom"] = $priceFrom;
}
// //check whether user has selected a priceTo
if(!empty($priceTo)){
    $sql .= " AND productPrice <= :priceTo";
    $namedParameters[":priceTo"] = $priceTo;
}
if(isset($orderBy)){
    if($orderBy == "price"){
        $sql .= " ORDER BY productPrice";
    }
    else if($orderBy == "name"){
        $sql .= " ORDER BY productName";
    }
}

// echo $sql;
$stmt = $conn -> prepare($sql);  //$connection MUST be previously initialized
$stmt->execute($namedParameters);
$records = $stmt->fetchAll(PDO::FETCH_ASSOC); //use fetch for one record, fetchAll for multiple

// print_r($records); //debugging    
echo json_encode($records);

?>
