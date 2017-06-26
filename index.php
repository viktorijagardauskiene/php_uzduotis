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
print_r($skaiciai); // dazniausiai naudojamas

echo $skaiciai[0] . "<br />";

$skaiciai[0] = 11;

print_r($skaiciai); // cia negraziai atspausdina masyvo reiksmes 

echo "<br />";

for ($i=0; $i < count($skaiciai); $i++) { // atspausdina masyvo reiksmes 
	echo $skaiciai[$i] . "<br />";
}

echo "<br />";

foreach ($skaiciai as $kitas) { // ir cia atspausdina masyvo reiksmes
	echo $kitas . "<br />";
}

?>
</pre>

</body>
</html>