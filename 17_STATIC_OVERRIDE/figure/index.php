<?php

require_once "Krug.php";
require_once "Trougao.php";
require_once "Kvadrat.php";
require_once "Pravougaonik.php";

$krug = new Krug(5);
$krug->setPi(3.14159) ;

echo "<p>Obim kruga je : ".$krug->obimKurga() ."</p>";
echo "<p>Povrsina kruga je : ".$krug->povrsinaKruga() ."</p>";

$d = new Krug(2.5);
echo $d->obimKurga();
echo "<br>";
echo $d->povrsinaKruga();
Krug::setBrojDecimala(4);
echo "<br>";
echo $d->obimKurga();
echo "<br>";
echo $d->povrsinaKruga();

echo "<p>Broj krugova do sada  je :" . Krug::getBrojKrugova() ." </p>";

$t1 = new Trougao(3,4,5);

echo $t1->obimTrougla()."<br>";
echo $t1->povrsinaTrougla()."<br>";

$k = new Kvadrat(5);
echo $k->obimKvadrata()."<br>";

echo $k->povrsinaKvadrata()."<br>";



$p = new Pravougaonik(5,9);
echo "<p>". $p->obim(). ",". $p->povrsina() ."</p>";

$p = new Kvadrat(5);
echo "<p>". $p->obim(). ",". $p->povrsina() ."</p>";

$oblici = [$t,$p,$k];
 
foreach ($oblici as $oblik)
{
  echo "<p>". $oblik->obim().", " .$oblik->povrsina() . "</p>";
}