<?php
include '../../../inc/dbConnection.php';
$conn = getDatabaseConnection("midtermP");
$promoCode = $_GET['promoCode'];
$code=array();
$sql = "SELECT promoCode FROM mp_codes WHERE 1";
$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
for ($num = 0; $num <= count($records)-1; $num += 1) { 
    $str = implode("",$records[$num]);
    if(strcmp(strtolower($promoCode),strtolower($str)) == 0){
        $code['here']=true;
        break;
    }else{
        $code['here']=false;
    }
}  
echo json_encode($code);
?>