<?php  

if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
    $sql = "SELECT p.`Project Name`, r.`Risk Scenario Name`, pr.`Mitigation Level`
    FROM `project risks` as pr
    INNER JOIN `projects` as p 
    ON pr.`Project ID` = p.id
    INNER JOIN `risk scenario database` as r
    ON pr.`Risk ID` = r.`Risk Scenario ID`";
    $res = mysqli_query($conn, $sql);
}else{
	header("Location: index.php");
} 