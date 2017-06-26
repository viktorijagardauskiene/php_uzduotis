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

	echo sprintf("3 kart %s yra %s <br />", $i , $rezultatas); // string print format (sprintf) %s yra kintamasis, kuris nurodytas toliau skliausteliuose, o funkcija įterps juos rodydama.
}


?>


</body>
</html>