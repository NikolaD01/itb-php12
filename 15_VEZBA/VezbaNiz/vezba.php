<?php

// Zadatak 1 :
$letovi = 
[
  "Beograd" => 150,
  "Sarajevo" => 149,
  "Milano" => 205,
  "Berlin" => 190,
  "Madrid" => 100,
  "New York" => 205 
];

// Zadatak 2 :

function maxBrojPutnika($letovi)
{
  $max = 0;
  foreach($letovi as $let)
  {
    if($let > $max)
    {
      $max = $let;
    }
  }
  return $max;
}

echo "<p>Maksimalan broj putnika je : " . maxBrojPutnika($letovi) . "</p>";

// Zadatak 3 :

function brojMax($letovi)
{
  $max = maxBrojPutnika($letovi);
  $br = 0;
  foreach($letovi as $let)
  {
    if($let == $max)
    {
      $br++;
    }
    
  }
  return $br;
}

echo "<p>Broj letova sa maksimalnim brojem letova je : ".brojMax($letovi) . "</p>";

// Zadatak 4 :

function prosek($letovi)
{
  $sum=0;
  foreach($letovi as $let)
  {
    $sum+=$let;
  }
  return round($prosek = $sum / count($letovi));
}

echo "<p>Prosecan broj putnika sa niskog aedroma je : ".prosek($letovi)."</p>";

// Zadatak 5 :

function isplativ($letovi, $granica)
{
  $br=0;
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

if(isplativ($letovi, 100))
{
  echo "<p>Dan je bio isplativ</p>";
}
else
{
  echo "<p>Dan nije bio isplativ</p>";
}

// Zadatak 6 :

function alarmantan($letovi, $granica)
{
  foreach($letovi as $let)
  {
    if($let < $granica)
    {
      $value = true;
      break;
    }
    else
    {
      $value =  false;
    }
  }
  return $value;
}

if(alarmantan($letovi,50))
{
  echo "<p>Dan je alarmantan</p>";
}
else
{
  echo "<p>Dan nije alarmantan</p>";
}

// Zadatak 7 :
function dobreDestinacije($letovi)
{
  $prosek = prosek($letovi);
  foreach($letovi as $let => $v) 
  {
    if($v > $prosek)
    {
      echo "<p>Let sa natprosecnim brojem putnika je :" . $let . " </p>";
    }
  }
}

dobreDestinacije($letovi);


// Zadatak dva : 


// Zadatak 8 :
$letovi = 
[
  ["dest" =>"Milano","country"=>"Italija","time"=>"12:30"],
  ["dest" =>"Beograd","country"=>"Srbija","time"=>"22:00"],
  ["dest" =>"Berlin","country"=>"Nemacka","time"=>"10:00"],
  ["dest" =>"Milano","country"=>"Italija","time"=>"16:00"],
  ["dest" =>"Paris","country"=>"Francuska","time"=>"10:00"],
  ["dest" =>"Paris","country"=>"Francuska","time"=>"09:00"]

];

// 9 :

function BrojLetovaZaZemlju($letovi, $zemlja)
{
  $br=0;
  foreach($letovi as $let)
  {
    if($let["country"] == $zemlja)
    {
      $br++;
    }
  }
  return $br;
}

$zemlja = "Francuska";
echo "<p>Broj letova za $zemlja je: ". brojLetovaZaZemlju($letovi,$zemlja). "</p>";

// Zadatak 10 :

function visePrePodne($letovi)
{
  $brP=0;
  $brPP=0;
  foreach($letovi as $let)
  {
    $vremeLet =  (int) substr($let["time"], 0, 2);
    if($vremeLet < 12)
    {
      $brPP++;
    }
    else
    {
      $brP++;
    }
  }
  if($brPP > $brP)
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
  echo "Vise letova popodne";
}

// Zadatak 11 : 

function ispisLetovaDoSada($letovi)
{
  $time = time();
  foreach($letovi as $let)
  {
    $timeLet = strtotime($let["time"]);
    if($timeLet <= $time)
    {
      echo "<p> Letovi koji su poleteli do sad su :". $let["dest"] ."</p>";
    }

  }
}
ispisLetovaDoSada($letovi);

// Zadatak 12 :

$crvenaZona = ["Francuska", "Italija"];

function rizicniLetovi($letovi,$crvenaZona)
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
rizicniLetovi($letovi,$crvenaZona);

// Zadatak 13 :

/* $letovi = 
[
  ["dest" =>"Milano","country"=>"Italija","time"=>"12:30"],
  ["dest" =>"Beograd","country"=>"Srbija","time"=>"22:00"],
  ["dest" =>"Berlin","country"=>"Nemacka","time"=>"10:00"],
  ["dest" =>"Milano","country"=>"Italija","time"=>"16:00"],
  ["dest" =>"Paris","country"=>"Francuska","time"=>"10:00"],
  ["dest" =>"Paris","country"=>"Francuska","time"=>"09:00"]

];
*/
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

function prosecanBrojLetovaZaZemlju($letovi)
{
  $zemlje =" "; // "Frunacuska Italija Srbija "
  $br=0;
  foreach($letovi as $let)
  {
    if (!str_contains($zemlje, $let['country'] ))
      {
        $zemlje .= $let['country'] ." ";
      }
      else
      {
        $br++;
      }
  }
  $delilac = count($letovi) - $br;
  $prosekLetova = count($letovi) / $delilac;
  return $prosekLetova;
}

echo "<p> Prosecan broj letova ka nekoj zemlji je : ". prosecanBrojLetovaZaZemlju($letovi) ."</p>";