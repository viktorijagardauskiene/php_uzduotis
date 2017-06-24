<?php

echo "Hello world"; // atvaizduoti funkcija

$suma = 1+2-8*9/2 ; // kintamasis "suma"

echo $suma; // atvaizduoti suma

//php funkcijos

$skaicius = 3.6;

$suapvalintasSkaicius = round($skaicius); //4

$apvalintasAukstyn = ceil($skaicius); //4

$duodaSkaiciuIkiKablelio = floor($skaicius); //3 


//php uzduotis 

$patalpos_plotis = 4; //m
$patalpos_ilgis = 8.5; // m

$plyteles_plotas = 0.33; // m2
$plyteles_kaina = 3; // Eur

$viso_plyteliu = $patalpos_plotis*$patalpos_ilgis/$plyteles_plotas;

$kaina = ceil($viso_plyteliu)*$plyteles_kaina;

echo "<br>Kaina " . $kaina;



// php random and Mersenne random (dideliems skaiciams) rodo random sveikuosius skaicius nuo tiek kiek irasysi iki tiek kiek irasysi
rand(nuo, iki);
mt_rand(nuo, iki);



