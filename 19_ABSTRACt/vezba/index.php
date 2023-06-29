<?php

require_once "AutoKredit.php";
require_once "StambeniKredit.php";

$krediti = [];

$krediti[]= $ak1 = new AutoKredit( 2000.345, 20.3, 20, 30.5);
$krediti[]= $ak2 = new AutoKredit( 2430.345, 10.3, 10, 30.5);
$krediti[]= $sk1 = new StambeniKredit("Stambeni kredit",200530.345, 20.3, 20.1);
$krediti[]= $sk2 = new StambeniKredit("Stambeni kredt",10050.345, 22.3, 21);



$ak1->ispis();
$ispis = $ak1->mesecnaRataKredita();
echo $ispis;

echo "<br>";

$sk1 = new StambeniKredit("Auto Kredit", 2000.345, 20.3, 20);
$stambeniKredit = $sk1->mesecnaRataKredita();
echo $stambeniKredit;
$sk1->ispis();

foreach($krediti as $kredit)
{
  $kredit->ispis();
}
foreach($krediti as $kredit)
{
  echo "<p>". $kredit->mesecnaRataKredita() ."</p>" ;
}