<?php  
session_start();
include "../db_conn.php";


$sql = "SELECT `Project ID`, COUNT(`Project ID`) AS count 
FROM `project risks` 
GROUP BY `Project ID`;";
$res = mysqli_query($conn, $sql);