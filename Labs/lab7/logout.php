<?php

session_start();

session_destroy();

header('location: logout1.php'); //taking user back to login screen


?>