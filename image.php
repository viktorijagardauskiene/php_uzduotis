<style>
	.j {
		background-color: black;
		height: 50px;
		width: 50px;
		display: block;
		float: left;
		}

	.b {
		background-color: white;
		height: 50px;
		width: 50px;
		display: block;
		float: left;
		}

	
</style>


<?php

$img = ["j", "b", "j", "b", "j", "b", "j", "b", "j"];

$hp = 0;

foreach ($img as $element) {
	echo '<div class="'. $element .'"></div>'; // $element yra kaip klases pavadinimas, todel tiek kabuciu
	$hp++; // hp skaiciuoja kiek ciklu
		if($hp == 3) { // po trecio ciklo perkelia i kita eilute, dviguba lygybe nes tikrinam reiksme o ne priskiriam kaip kintamajam
			echo "<br /><br /><br />";
			$hp = 0; // grazina hp reiksme i 0
		}

}

$juodos_korteles = 0;
foreach ($img as $kortele) {
	if ($kortele == "j") {
		++$juodos_korteles;
			}
}
echo "<br />";
echo "Mums reikes ".$juodos_korteles." juodu korteliu.";


if ($sum > 6 && $a != $b) { // && AND, != arba <> nelygu
	echo "Suma didesne uz 6 ir 'kauliukai skirtingi'"

	// || OR  (mygtukas virs enter)

	
}
?>