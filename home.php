<?php
session_start();
include "db_conn.php";
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

	<!DOCTYPE html>
	<html>

	<head>
		<title>HOME</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<script src="components/header.js" type="text/javascript" defer></script>
		<script src="components/headerrc.js" type="text/javascript" defer></script>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<?php include_once 'php/dataanalytics.php'; ?>
	</head>

	<body>



		<?php if ($_SESSION['role'] == 'pm') { ?>
			<!-- For Admin -->

			<header-component></header-component>






			<div class=" d-flex flex-row" id="rsD" style="margin-top:30px">
				<?php include_once 'php/riskscenariotable.php'; ?>
				<?php include_once 'php/riskscenariofunctions.php'; ?>
			</div>
			<div class=" d-flex flex-row" id="projectDb">
				<?php include_once 'php/projectstable.php'; ?>
				<?php include_once 'php/projectsfunctions.php'; ?>
			</div>
			<div class="d-flex flex-row" id="prst">
				<?php include_once 'php/projectsrisktable.php'; ?>
				<?php include_once 'php/projectsriskfunctions.php'; ?>
			</div>

		<?php } else { ?>
			<headerrc-component></headerrc-component>

			<div class=" d-flex flex-row" id="rsD" style="margin-top:20px">
				<?php include_once 'php/riskscenariotable.php'; ?>
			</div>
			<div class=" d-flex flex-row" id="projectDb">
				<?php include_once 'php/projectstable.php'; ?>
			</div>

			<div class="d-flex flex-row" id="prst">
				<?php include_once 'php/projectsrisktable.php'; ?>
			</div>

			<div class="d-flex flex-row" id="da">
			<div id="columnchart_values" style="width: 1800px; height: 500px;"></div>
			<div id="piechart" style="width: 1800px; height: 500px;"></div>
			</div>

		<?php } ?>
		</div>
		<script>
			function showHide(ele) {
				var x = document.getElementById(ele);
				if (x.style.display === "none") {
					x.style.display = "block";
				} else {
					x.style.display = "none";
				}
			}
		</script>
	</body>

	</html>
<?php } else {

	header("Location: index.php");
} ?>