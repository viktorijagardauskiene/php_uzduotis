<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<?php
 
// uzduotis namu darbams 
/* Suvesti i masyva troskinio sudeti:
jautiena 250 g
pupeles 500 g
vanduo 500g
pomidorai 300g
paprika 100 g

1. parasyti funkcija kuri atspausdintu visus elementus lenteleje 
2. parasyti funkcija kuri atspausdintu "jautienos receptui mums reikes xxx gramu zzz, taip pat xxx gramu bbb....."
3. parasyti funkcija kuri suskaiciuotu kiek svers visi produktai
4. parasyti funkcija kuri patikrintu ar vandens ne maziau nei pupeliu */

$produktai = [
		"jautiena" => 250, 
		"pupeles" => 500, 
		"vanduo" => 500, 
		"pomidorai" => 300, 
		"paprika" => 100,
		];

function lentele($produktai) {
	foreach ($produktai as $prod => $kiekis) {
    echo '<tr>';
    echo "<td>" . $prod . "</td><td>" . $kiekis . "</td>";
    echo '</tr>';
  }
}

function receptas($produktai) {

$tik_produktai = array_keys($produktai);
$tik_kiekis = array_values($produktai);
// for ($i=0; $i < count($tik_produktai); $i++) { 
 //	if 
 

//	echo sprintf("Jautienos troškiniui pagaminti mums reikės %i gramų %s, ",  " taip pat %i gramų %s, be to %i gramų %s, %i gramų %s ir %i gramų %s",  );	
//	}
}

?>

<div class="container">

<table class="table-bordered">
<tr>
	<?php lentele($produktai); ?>
</tr>
</table>


<?php 

	receptas($produktai); 
echo "<br />";
echo "Visų produktų bendras svoris yra " . array_sum($produktai);
?>

</div>

</body>
</html>