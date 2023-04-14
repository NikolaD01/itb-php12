<?php

  $a = "Hello World !";
echo $a; /* Ovo prikazuje string */
echo "<br>";
$a = 28;
echo $a;
echo "<br>";
$a = $a + 2;
echo $a;
echo "<br>";
$a = 2.5 + 8.2;
echo $a;
echo "<br>";
$a = 100;
echo $a;
echo "<br>";
$b= $a - 20;
echo "vrednost promenjive b je " . $b;
$c = "1";
echo "<br>";
$d = $c + 2;
echo $d;
echo "<br>";
$d+= 2;
echo $d;

/* 1. Zadatak */
echo "<hr>";

$h = 20;
$m = 35;
$rez = $h * 60 + $m;

echo "Rezulat zadataka je ". $rez ." minuta";
echo '<br>';
/* 2. ZADATAK */
echo "<hr>";
date_default_timezone_set('Europe/Belgrade');
$h = date('G');
$m = date('i');
echo "trenutno vreme je $h h i $m min ";

$rez = $h * 60 + $m;
echo "Rezultat zadatka 2. je " . number_format($rez, 0,",",".") . " minuta";
echo "<hr>";