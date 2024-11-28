<?php
session_start();

include('../functions/connect.php');

if($dbconfig)
{
    // echo "Database Connected";
}
else
{
    header("Location: connect.php");
}
if(!$_SESSION['name']) {
    header('Location: login.php');
}


?>