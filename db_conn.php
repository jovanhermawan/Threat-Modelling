<?php  

$sname = "localhost";
$user = "root";
$pass = "";

$db_name = "th_db";

$conn = mysqli_connect($sname, $user, $pass, $db_name);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}