<?php

$brojStrana = [500, 200, 333, 400, 120];
$cena = [5000, 3500, 1200, 900, 600];

// Prolazak kroz ceo niz
// for($i=0;$i<count($brojStrana);$i++)
// foreach($brojStrana as $brs)
// $i=0;
// while($i<count($brojStrana)){$i++;}


// Uzimanje vrednosti elemenata

//$br5=$brojStrana[$i]; // vraca 500

function maxProsek($brojStrana,$cena)
{
  $max = cena[0]/$brojStrana[0];
  for($i=0;$i<count($brojStrana);$i++)
  {
    $tryMax= cena[$i]/$brojStrana[$i];
    if($tryMax > $max)
    {
      $max = $tryMax;
    }
  }
  return $max;
}

$brojStrana = ["knjiga1"=>500, "knjiga2"=>200, "knjiga3"=>333,"knjiga4"=>400, "knjiga5"=>120];
$cena = ["knjiga1"=>5000, "knjiga2"=>3500,"knjiga3"=>1200, "knjiga4"=>900, "knjiga5"=>600];

// foreach

function maxProsekA($brojStrana,$cena)
{
  $max=0;
  foreach($brojStrana as $k=>$v)
  {
    $t = $cena[$k]/$v;
    if($max<$t)
    {
      $max=$t;
    }
  }
  $max=$t;
}

$nizKnjiga = 
[
  ["brojStrana"=>500, "cena"=>5000],
  ["brojStrana"=>520, "cena"=>4000],
  ["brojStrana"=>333, "cena"=>900],
  ["brojStrana"=>120, "cena"=>600],
  ["brojStrana"=>200, "cena"=>1200],
];

function maxProsekNizA($nizKnjiga)
{
  $max=0;
  for($i=0;$i<count($nizKnjiga);$i++)
  {
    $t = $nizKnjiga[$i]["cena"]/$nizKnjiga[$i]["brojStrana"];
    if($max<$t)
    {
      $max=$t;
    }
  }

  return $max;
}

$dan = ["temperatura"=>[8,5,10,-2,5]];
for($i=0;$i<count($dan["temperatura"]);$i++)
{
  $t=$dan["temperatura"][$i];
}


class Knjiga
{
  public $brojStrana;
  public $cena;
}


$k1= New Knjiga();
$k1->brojStrana = 500;
$k1->cena =5000;

$k2= New Knjiga();
$k2->brojStrana = 200;
$k2->cena3=3500;

$k3= New Knjiga();
$k3->brojStrana = 400;
$k3->cena =1200;

$k4= New Knjiga();
$k4->brojStrana = 50;
$k4->cena =900;

$k5= New Knjiga();
$k5->brojStrana = 120;
$k5->cena =6000;



$knjige = [$k1,$k2,$k3,$k4,$k5];


function maxProsekNiz($knjige)
{
  $max = 0;
  foreach ($knjige as $knjiga)
  {
    $t = $knjiga->cena / $knjiga->brojStrana;
    if($max <$t)
    {
      $max = $t;
    }
  }
}