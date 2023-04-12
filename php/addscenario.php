<?php  
session_start();
include "../db_conn.php";


if (isset($_POST['rsn']) && $_POST['rsn'] != "" && isset($_POST['rsd']) && $_POST['rsd'] != "" && isset($_POST['ms']) && $_POST['ms'] != "" ) {
    $rsn = $_POST['rsn'];
	$rsd = $_POST['rsd'];
    $ms = $_POST['ms'];
	$sql = "INSERT INTO `Risk Scenario Database` (`Risk Scenario Name`, `Risk Scenario Description`, `Mitigation Strategy`)
    VALUES ('{$rsn}', '{$rsd}', '{$ms}')";
    $res = mysqli_query($conn, $sql);

    header("Location: ../home.php?success1=Risk Scenario Added Successfully");
}
else {header("Location: ../home.php?error1=Risk Scenario Failed to be Added");}