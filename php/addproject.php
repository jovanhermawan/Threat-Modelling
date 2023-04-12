<?php  
session_start();
include "../db_conn.php";


if (isset($_POST['pn']) && $_POST['pn'] != ""  ) {
    $pn = $_POST['pn'];
	$sql = "INSERT INTO `projects` (`Project Name`)
    VALUES ('{$pn}')";
    $res = mysqli_query($conn, $sql);

    header("Location: ../home.php?success5=Project Added Successfully");
}
else {header("Location: ../home.php?error5=Project Failed to be Added");}