<!DOCTYPE html>
<html>
<body>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
		td {
			padding: 15px;
			border-color: white;
			border: solid;
			background-color: black;
			color: white;
			}

		table {
			border-color: white;
			border: solid;
			}

</style>
<div class="container">
	<div class="langeliai">
	<?php
		$end=200; 
		$rows=ceil($end/25);
		$x=0;
		$start=1;
		?>
		<table>
		<?php
		while($x<=$rows) {
		  echo "<tr>";
		  for ($y = 0; $y < 25; $y++, $start++) {
		    if ($start <= $end) echo "<td>$start</td>";
		  }
		  echo "</tr>";
		  $x++;
		}
		?>
</table>
	</div>
</div>
</body>
</html>