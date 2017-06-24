<?php
					
	   function print_cells($count) {

	   	for($i=1; $i<=$count; $i++) {
	   		echo("<div class=langelis>".$i."</div>");
	   		}
	   }
?>

<?php
//uzduotis baseinas
	function get_area($ilgis,$plotis,$gylis) { //skliausteliuose nurodom kokie kintamieji bus naudojami funkcijoje
		// jei sklaisutuose nurodyciau pvz $ilgis=10; tai ilgio dydis visada bus 10 jei nebus nurodyta kitaip
		
		
		$pavirsiaus_plotas=($ilgis*$plotis)+2*($gylis*$plotis)+2*($gylis*$ilgis);
		
		return $pavirsiaus_plotas; // grazinti funkcijoje panaudotos formules reiksme


	}

?>

<?php
// uzduotis apie oro temperatura
	function get_feel($temp) {
		if ($temp>=30) {
			return "karšta";
		} elseif ($temp>=15 && $temp<=29) {
			return "šilta";
		} elseif ($temp>=5 && $temp<=14) {
			return "vėsu";
		} elseif ($temp<5) {
			return "šalta";
		}

	}


?>