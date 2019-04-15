<?php
session_start();
//TODO: Save incoming data into session
if(!isset($_SESSION["progress"])){
    $_SESSION["progress"] = 0;
}
foreach($_POST as $key => $value)
{
    $_SESSION[$key] = $value;
}
echo json_encode($_SESSION)
?>