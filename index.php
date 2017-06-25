<?php
		require "function.php";
		//include "function.php";
	   
		?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   	<style>
		.langelis {
			width: 40px;
			padding: 10px;
			background-color: gray;
			display: block;
			float: left;
			margin: 1px;
			}
		.eilute {
			border-color: black !important;
			
		}
	</style>
</head>
<body>
<div class="container">
			
	<div class="oro_temperatura">
			
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-bordered">
				<th class='eilute'>Baseino gylis</th>
				<th class='eilute'>Tūris</th>
				<th class='eilute'>Autocisternų kiekis</th>
					<?php
					for ($gylis=1; $gylis <= 30 ; $gylis++) { 			
					
						$auto_sk=ceil(baseino_turis($ilgis,$plotis,$gylis)/$auto_turis);
				
						echo "<tr><td class='eilute'>".$gylis." m."."</td><td class='eilute'>".baseino_turis($ilgis,$plotis,$gylis)." kv. m."."</td><td class='eilute'>". $auto_sk." vnt."."</td></tr>";
						}
					?>
			</table>
		</div>
			
		<div class="col-md-2"></div>
	</div>

	</div>

</div>
</body>
</html>