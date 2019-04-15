<?php

session_start();
$conn = getDBConnection();

// TODO: Grab all of our paramters from the session
$parameters[":name"]= $_SESSION["name"];
$parameters[":email"] =$_SEESION["email"];
$parameters[":zip"]=$_SESSION["zip"];
$parameters[":major"] =$_SESSION["major"];

// TODO: Execute SQL to add a row to database table


// Destory the session once you submit
session_destroy();

// TODO: Return all the rows from the datable table

?>
