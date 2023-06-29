<?php

require_once "Trougao_stari.php";
require_once "Kvadrat.php";
require_once "Pravougaonik.php";
require_once "Romb.php";


$t = new Trougao(3,4,5);



$p = new Pravougaonik(5,9);


$k = new Kvadrat(5);

$r = new Romb(6,15);

$oblici = [$t,$p,$k,$r];
 
foreach ($oblici as $oblik)
{
  $oblik->ispis();
}
