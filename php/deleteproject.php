<?php  
session_start();
include "../db_conn.php";


if (isset($_POST['pi']) && $_POST['pi'] != ""  ) {
    $pi = $_POST['pi'];
	$sql = "DELETE FROM `projects` WHERE `ID` = $pi "; 
    try{
        $res = mysqli_query($conn, $sql);
        header("Location: ../home.php?success6=Project Successfully Deleted");
     }
     catch(Exception $e)
     {
        header("Location: ../home.php?error6=Project Failed To Be Deleted, Dependencies Detected");
     }
}
else {header("Location: ../home.php?error6=Project Failed to be Deleted");}