<script type="text/javascript">
	google.charts.load('current', {
		'packages': ['corechart']
	});
	google.charts.setOnLoadCallback(drawChart);

	function drawChart() {

		var data = google.visualization.arrayToDataTable([
			['Projects', 'Number of Risks'],
			<?php
			$sql = "SELECT pr.`Project ID`, p.`Project Name` AS projname, COUNT(pr.`Project ID`) AS count 
					FROM `project risks` as pr
					INNER JOIN projects as p
					ON pr.`Project ID` = p.id
					GROUP BY pr.`Project ID`;";

			$res = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_array($res)) {

				echo "['" . $row['projname'] . "'," . $row['count'] . "],";
			}
			?>
		]);

		var options = {
			title: 'Number of Risks Categorized by Projects'
			
		};

		var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));

		chart.draw(data, options);
	}
</script>

<script type="text/javascript">
	google.charts.load('current', {
		'packages': ['corechart']
	});
	google.charts.setOnLoadCallback(drawChart);

	function drawChart() {

		var data = google.visualization.arrayToDataTable([
			['Risk Scenarios', 'Number of Risks'],
			<?php
			$sql = "SELECT pr.`Risk ID`, r.`Risk Scenario Name` AS riskname, COUNT(pr.`Risk ID`) AS count 
					FROM `project risks` as pr
					INNER JOIN `risk scenario database` as r
					ON pr.`Risk ID` = r.`Risk Scenario ID`
					GROUP BY pr.`Risk ID`;";

			$res = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_array($res)) {

				echo "['" . $row['riskname'] . "'," . $row['count'] . "],";
			}
			?>
		]);

		var options = {
			title: 'Number of Risks Categorized by Risk Scenario Type'
		};

		var chart = new google.visualization.PieChart(document.getElementById('piechart'));

		chart.draw(data, options);
	}
</script>