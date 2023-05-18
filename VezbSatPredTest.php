<?php
$letovi =
[
  "Beograd"=>105,
  "Milano"=>205,
  "Berlin"=>205,
  "Paris"=>125,
  "Las Vegas"=>187
];

function maxBrojPutnika($letovi)
{
  $max = 0;
  foreach($letovi as $let)
  {
    if($max < $let)
    {
      $max = $let;
    }
  }
  return $max;
}

echo "<p>Max broj putnika je : ".maxBrojPutnika($letovi)."</p>";

// z 3
function brojMax($letovi)
{
  $max = maxBrojPutnika($letovi);
  $br = 0;
  foreach($letovi as $let)
  {
    if($max == $let)
    {
      $br++;
    }
  }
  return $br;
}

echo "<p>Broj letova sa max broj putnika je : ".brojMax($letovi)."</p>";

// z 4
function prosek($letovi)
{
  $sum = 0;
  foreach($letovi as $let)
  {
    $sum+=$let;
  }
  return $sum = round($sum/count($letovi));
}

echo "<p>Prosecan broj putnika je :". prosek($letovi)."</p>";

function ispaltiv($letovi, $granica)
{
  $br = 0;
  foreach($letovi as $let)
  {
    if($let > $granica)
    {
      $br++;
    }
  }
  if($br > count($letovi)/2)
  {
    return true;
  }
  else
  {
    return false;
  }
}


if(ispaltiv($letovi,100))
{
  echo "<p>Dan je bio isplativ</p>";
}
else
{
  echo "<p>Dan nije bio isplativ</p>";
}

// Z 6

function alarmantan($letovi, $granica)
{
  foreach($letovi as $let)
  {
    if($let < $granica)
    {
      return true;
    }
  }
  return false;
}

if(alarmantan($letovi,150))
{
  echo "<p>Dan je bio alarmantan</p>";
}
else
{
  echo "<p>Dan nije bio alarmantan</p>";
}

function dobreDestinacije($letovi)
{
  $prosek = prosek($letovi);
  foreach($letovi as $let => $v)
  {
    if($v > $prosek)
    {
      echo "<p>Let sa natprosecnim brojem putnika je za $let</p>";
    }
  }
}

dobreDestinacije($letovi);


// ZADATAK DVA

// z 8
$letovi =
[
["dest"=>"Las Vegas","country"=>"Amerika","time"=>"11:00"],
["dest"=>"Milano","country"=>"Italija","time"=>"10:20"],
["dest"=>"Venecija","country"=>"Italija","time"=>"16:30"],
["dest"=>"Paris","country"=>"Francuska","time"=>"13:15"],
["dest"=>"London","country"=>"Engleska","time"=>"18:00"],
["dest"=>"London","country"=>"Engleska","time"=>"12:00"],
["dest"=>"Venecija","country"=>"Italija","time"=>"12:30"]
];

function brojLetovaZaZemlju($letovi, $zemlja)
{
  $br=0;
  foreach($letovi as $let)
  {
    if($let["country"]==$zemlja)
    {
      $br++;
    }
  }
  return $br;
}
$zemlja = "Italija";

echo "<p>Broj letova do $zemlja je :".brojLetovaZaZemlju($letovi,$zemlja)."</p>";

function visePrePodne($letovi)
{
  $brPosleP=0;
  $brPreP=0;
  foreach($letovi as $let)
  {
    $time = (int) substr($let["time"], 0, 2);
    if($time < 12)
    {
      $brPreP++;
    }
    else
    {
      $brPosleP++;
    }
  }
  if($brPreP>$brPosleP)
  {
    return true;
  }
  else
  {
    return false;
  }
}

if(visePrePodne($letovi))
{
  echo "<p>Vise letova prepodne</p>";
}
else
{
  echo "<p>Vise letova popodne</p>";
}

// zadatak 11

function ispisLetovaDoSada($letovi)
{
  $time = time();
  foreach($letovi as $let)
  {
    $vremeLet = strtotime($let["time"]);
    if($time > $vremeLet)
    {
      echo "<p>Let za ".$let["dest"] ." je poleteo do sad</p>";
    }
  }
}


ispisLetovaDoSada($letovi);

// Zadatak 12:

$crvenaZona = ["Francuska"];

function rizicniLetovi($letovi, $crvenaZona)
{
  foreach($letovi as $let)
  {
    foreach($crvenaZona as $zemlja)
    {
      if($let["country"] == $zemlja)
      {
        echo "<p style='color: red;' > Let za:". $let['dest']. ",".  $let['country'] . " u " . $let['time'] . " je u crvenoj zoni</p>";
      }
    }
  }
}

rizicniLetovi($letovi, $crvenaZona);

// Zadatak 13:
function trazeneDestinacije($letovi)
{
  $trazeniLetovi =" ";
    foreach($letovi as $let)
    {
      $br = 0;
      foreach($letovi as $let2)
      {
        if ( $let['dest'] == $let2['dest'])
        {
          $br++;
        }
      }
      if ( $br > 1 && !str_contains( $trazeniLetovi, $let['dest'] ))
      {
        $trazeniLetovi .= $let['dest'] ." ";
      }
    }
    echo "<p>$trazeniLetovi</p>";
}

trazeneDestinacije($letovi);