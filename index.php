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


// uzduotis sukurti funkcija kuri atspausdins random gerima kiekviena karta vis kita

function random_gerimas($gerimai) {

$gerimas = strtolower($gerimai[rand(0, count($gerimai)-1)]);


echo sprintf("Mano mėgstamiausias gėrimas yra %s", $gerimas) . "."; 
}

random_gerimas($gerimai);

echo "<br />";

$users = [];
$user1 = ["name" => "Petras", "surname" => "Jonaitis",];
$user2 = ["name" => "Mantas", "surname" => "Eimaitis",];

array_push($users, $user1, $user2); // masyve $users yra kiti du masyvai (su savo elementais) Masyve[masyvas];

print_r($users);

echo "<br />";

echo $users[0]["name"]; // nurodo masyve esancio pirmojo masyvo "name" elementa

echo "<br />";

foreach ($users as $kitas) { // grazina kiekvieno masyvo name ir surname elementu reiksmes
	echo $kitas["name"]. " " . $kitas["surname"]."<br />";
}

?>
</pre>

</body>
</html>