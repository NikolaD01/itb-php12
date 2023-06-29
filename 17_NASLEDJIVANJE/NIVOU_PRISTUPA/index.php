<?php

require_once "vozilo.php";
require_once "Automobil.php";

$v = new Vozilo ("a", "b", "c");
$v->ispis();

// echo $v->privatnoPolje; van klase ne moze pristupiti privatnim poljima
// echo $v->zasticenoPolje; Greska van klase ne moze
echo $v->javnoPolje; // OK

$a = new Automobil("d", "e", "f", 5);
$a->ispis();
$a->ispisAuto();