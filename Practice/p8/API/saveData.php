<?php
session_start();
//TODO: Save incoming data into session
$progress= $_GET["array"];
if(!isset($_SESSION["progress"])){
    $_SESSION["progress"] = $progress;
}
echo json_encode($_SESSION)
?>