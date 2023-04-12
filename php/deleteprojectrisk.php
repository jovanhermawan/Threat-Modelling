<?php  
session_start();
include "../db_conn.php";


if (isset($_POST['pn']) && $_POST['pn'] != "" && isset($_POST['rn']) && $_POST['rn'] != ""  ) {
    $pn = $_POST['pn'];
	$rn = $_POST['rn'];
	$sql = "SELECT * FROM `project risks` WHERE `Project ID` = $pn AND `Risk ID` = $rn" ; 
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {
        $sql = "DELETE FROM `project risks` WHERE `Project ID` = $pn AND `Risk ID` = $rn" ;
        $res = mysqli_query($conn, $sql);
        header("Location: ../home.php?success4=Project Risk Successfully Deleted");}
        else{
            header("Location: ../home.php?error4=DProject-Risk Pair Not Found");
        }
   
}
else {header("Location: ../home.php?error4=Risk Scenario Failed to be Added");}