<?php  
session_start();
include "../db_conn.php";


if (isset($_POST['pn']) && $_POST['pn'] != "" && isset($_POST['rn']) && $_POST['rn'] != ""  ) {
    $pn = $_POST['pn'];
	$rn = $_POST['rn'];
    $ml = $_POST['ml'];
	$sql = "INSERT INTO `project risks` (`Project ID`, `Risk ID`, `Mitigation Level`)
    VALUES ('{$pn}', '{$rn}', '{$ml}')";
    try{
        $res = mysqli_query($conn, $sql);
        header("Location: ../home.php?success2=Project Risk Successfully Added");
     }
     catch(Exception $e)
     {
        header("Location: ../home.php?error2=Duplicate Project-Risk Pair Detected");
     
     }
}
else {header("Location: ../home.php?error2=Risk Scenario Failed to be Added");}