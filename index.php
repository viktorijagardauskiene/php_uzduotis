<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
 
// parašyti "3 kart 1 yra 3" kai daugiklis yra nuo 1 iki 10
for ($i=1; $i <= 10 ; $i++) { 
	$rezultatas = 3*$i;

	echo sprintf("3 kart %u yra %u <br />", $i , $rezultatas); // string print format (sprintf) %s (su procento zenklu) yra kintamasis, kuris nurodytas toliau skliausteliuose, o funkcija įterps juos rodydama.
}

?>

<pre>
<?php

$skaiciai = [22, 33, 44, 55, 66];

for ($i=0; $i < count($skaiciai) ; $i++) { // masyvo $skaiciai kiekviena elementa padaugina is dvieju
	$skaiciai[$i] = $skaiciai[$i]*2;
}
print_r($skaiciai); // atspausdina masyvio elementus

function spausdinti($masyvas) { // atskira funkcija atspausdina masyvo elementus
	foreach ($masyvas as $elementas) { 
	echo $elementas . "<br />";
}
}

spausdinti($skaiciai);

echo "<br />";

// uzduotis sukurti funkcija kuri atspausdintu masyvo elementus kaip sarasa <ul>

$gerimai = ["Vanduo", "Sultys", "Arbata", "Kava", "Pienas"];

function atspausdinti_sarasa($masyvas) {
 foreach ($masyvas as $elementas) {
 	echo "<ul><li>" . strtoupper($elementas) . "</li></ul>";
 }

}
echo "Gėrimai";
atspausdinti_sarasa($gerimai);


?>
</pre>

</body>
</html>