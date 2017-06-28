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
	$hp++;
		if($hp == 3) {
			echo "<br /><br /><br />";
			$hp = 0;
		}

}

?>