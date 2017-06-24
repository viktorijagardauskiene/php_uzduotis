<?php
					
	   function print_cells($count) {

	   	for($i=1; $i<=$count; $i++) {
	   		echo("<div class=langelis>".$i."</div>");
	   		}
	   }
?>

<?php
//uzduotis baseinas
	function get_area($ilgis,$plotis,$gylis) {
		
		
		$pavirsiaus_plotas=($ilgis*$plotis)+2*($gylis*$plotis)+2*($gylis*$ilgis);
		return $pavirsiaus_plotas;


	}

?>