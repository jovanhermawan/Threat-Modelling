<?php  
session_start();
include "../db_conn.php";


if (isset($_POST['rsi']) && $_POST['rsi'] != "" ) {
    $rsi = $_POST['rsi'];

	$sql = "DELETE FROM `Risk Scenario Database` WHERE `Risk Scenario ID` = $rsi";
    $res = mysqli_query($conn, $sql);

    header("Location: ../home.php?success3=Risk Scenario Deleted Successfully");
}
else {header("Location: ../home.php?error3=Risk Scenario Failed to be Deleted");}