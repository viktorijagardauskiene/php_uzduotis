<?php
					
	   function print_cells($count) {

	   	for($i=1; $i<=$count; $i++) {
	   		echo("<div class=langelis>".$i."</div>");
	   		}
	   }
?>

<?php
//uzduotis baseinas ir autocisternos
		$ilgis=20; 
		$plotis=5;
		$auto_turis=400;
		
	function baseino_turis($ilgis,$plotis,$gylis) {
		$turis=$ilgis*$plotis*$gylis;
		return $turis;
	}

?>

