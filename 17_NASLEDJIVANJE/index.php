<?php

require_once "Automobil.php";

/*
Ovako smo radili dok je sve bilo public
$v = new Vozilo();
$v->boja = "bela";
$v->tip = "BMW";
echo "<p>$v->boja, $v->tip</p>";
$v-> voziVozilo();

$a = new Automobil();
$a->boja = "zuta";
$a->tip = "Peugeout";
echo "<p>$a->boja, $a->tip</p>";
$a-> voziVozilo(); 
$a-> voziAutomobil();
*/


// privatne metode

$v = new Vozilo("bela", "BMW");
$v->voziVozilo();

$a = new Automobil("zuta","Peguet");
$a->voziVozilo();
$a->voziAutomobil();
