<?php
$letovi = 
[
  ["dest"=>"Paris","country"=>"France","time"=>"07:10"],
  ["dest"=>"Madrid","country"=>"Spain","time"=>"15:00"],
  ["dest"=>"Madrid","country"=>"Spain","time"=>"23:30"],
  ["dest"=>"Barcelona","country"=>"Spain","time"=>"06:30"]
];

function ispisSvihLetova($letovi)
{
  foreach($letovi as $let)
  {
    $destinacija = $let["dest"];
    $zemlja = $let["country"];
    $vreme = $let["time"];
    echo "<p>Destinacija: $destinacija, Drzava: $zemlja, Vreme polaska: $vreme </p>";
  }
}


ispisSvihLetova($letovi);


function ispisSvihLetovaBoja($letovi)
{
  foreach($letovi as $let)
  {
    $destinacija = $let["dest"];
    $zemlja = $let["country"];
    $vreme =$let["time"];
    $vremeInt =(int) substr($let["time"], 0, 2);
    if($vremeInt <12)
    {
      echo "<p style='color:blue;'>Destinacija: $destinacija, Drzava: $zemlja, Vreme polaska: $vreme </p>";
    }
    else
    {
      echo "<p style='color:purple;'>Destinacija: $destinacija, Drzava: $zemlja, Vreme polaska: $vreme </p>";
    }
  }
}
ispisSvihLetovaBoja($letovi); 

function trazeneDestinacije($letovi)
{
  $polasci = [];
  foreach($letovi as $let)
  {
    $destinacija = $let["dest"];
    $postojiLet = false;
    foreach($polasci as $d => $br)
    {
      if($d == $destinacija)
      {
        $postojiLet = true;
        $polasci[$destinacija]++;
      }
    }
    if($postojiLet == false)
    {
      $polasci[$destinacija] = 1;
    }
  }
}