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
	</style>
</head>
<body>
<div class="container">
		

	<div class="baseinas">
		
		<?php
		// parasyti funkcija get_area(), kuri grazintu baseino sienu plota pagal perduodamus atributus
		
		$ilgis=50; 
		$plotis=10;

		for ($gylis=1; $gylis < 5 ; $gylis++) { 
			echo "Mums reikės " . get_area($ilgis, $plotis, $gylis)." kv.m.plytelių."."<br />";
			// jei nenurodyta kintamuju reiksme atskirai, tai funkcijos get_area skliausteliuose nurodom skaicius, is eiles kaip numatyta funkcijoje (kitam faile) 
		}
		
		?>
	</div>

	<div class="oro_temperatura">
			<?php
				// if...else... uzduotis apie oro temperatura
				/* uzduotis: parasyti get_feel() funkcija kuri grazintu :
				karsta , kai temperatura aukstesne nei 30 laipsniu;
				silta , kai temperatura tarp 15 ir 30 laipsniu;
				vesu , kai temperatura 5 ir 14 laipsniu */
				
			?>

			<table class="table table-bordered">
				<th>Temperatūra</th>
				<th>Pojūtis</th>
					<?php
						for ($temp=0; $temp <= 30 ; $temp++) { 
						if (get_feel($temp) == "karšta") {
							$class = "danger";
						} elseif (get_feel($temp) == "šilta") {
							$class = "success";
						} elseif (get_feel($temp) == "vėsu") {
							$class = "warning";
						} elseif (get_feel($temp) == "šalta") {
							$class = "info";
						}
						
						echo "<tr class=".$class."><td>".$temp."</td><td>".get_feel($temp)."</td></tr>";
						}
					?>
			</table>

	</div>

</div>
</body>
</html>