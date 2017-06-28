<style>
	.y {
		background-color: yellow;
		height: 30px;
		width: 30px;
		display: block;
		float: left;
		}

	.g {
		background-color: green;
		height: 30px;
		width: 30px;
		display: block;
		float: left;
		}

	.r {
		background-color: red;
		height: 30px;
		width: 30px;
		display: block;
		float: left;
		}
</style>



<?php

$img = ["y", "y", "g", "g", "r", "r"];

foreach ($img as $element) {
	echo '<div class="'. $element .'">' . $element . '</div>'; // $element yra kaip klases pavadinimas, todel tiek kabuciu
}

?>