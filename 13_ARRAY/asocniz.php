<?php

  

 

 /* $age = array(
    "Pera"=> 28,
    "Lazar"=> 26,
    "Violeta"=> 35,
    $date = array(
    "godine"=>28,
    "ime"=>"Jelena"
  )
  );
  print_r($age);
  $age[$date]["godine"]=29;
  print_r($age);
 */

 $godine = array();
 $godine["Pera"] = 16;
 $godine["Ana"] = 23;
 $godine["Djordje"] = 26;
 $godine["Petar"] = 11;
 $godine["Josip"] = 13;
 $godine["Filip"] = 15;

 foreach($godine as $i => $g) // $i vrednost kljuca , $g je value kljuca
 {
  echo "<p>Oosba $i ima $g godina</p>";
 }

 foreach($godine as $g)
 {
  echo "<p>Osoba ima $g godina.</p>";
 }

// foreach moze da se koristi za indexne nizove
$brojevi = array(5,-16,3.3,17.8,0);
$brojevi[100] = 50;
$brojevi[2]= 4;
foreach($brojevi as $broj)
{
  echo "$broj &nbsp";
}
foreach($brojevi as $indeks => $broj)
{
 echo "<p>Element sa indeksom $indeks ima vrednost $broj</p>";
}

// Zadatak 1
$automobili = array(
  "Audi A3" => 2004,
  "Opel Corsa" => 1998,
  "Opel Astra" => 2015,
  "Peugeot 208" => 2004,
  "Ford Focus" => 2015
);

echo "<hr>";

foreach ($automobili as $marka => $godiste )
{
  echo "<p>Automobili $marka proizveden $godiste. godine</p>";
}

echo "<hr>";

$trenutnaGodina = date("Y");  
foreach($automobili as $marka => $godiste)
{
  if($trenutnaGodina - $godiste > 10)
  {
    echo "<p>Automobil $marka je stariji od 10 godina.</p>";
  }
}
echo "<hr>";
foreach($automobili as $marka => $godiste)
{
  //------BITNO-----------BITNO-----------BITNO-----------BITNO-----------BITNO-----
  if(strpos($marka, "Opel")!== false && $godiste >= 2000) // proveravanje stringa jako bitno zapamti
  //------BITNO-----------BITNO-----------BITNO-----------BITNO-----------BITNO-----
  {
    echo "<p>Autmobil $marka je proizveden posle 2000 godine</p>";
  }
}
//
echo "<hr>";
// Zadatak 2:
$persons = array(
  'Nikola' => 194,
  'Petar' =>  184,
  'Jelena' =>  162,
  'Andrea' =>  164,
  'Stefan' =>  187,
  'Viktor' =>  179,
  'Viktorija' =>  159,
  'Jovan' =>  196,
  'Aleksandar' => 196
);
$max = $persons['Nikola'];
// Staviti 0 jer mozda ne znamo koja je osoba u pitanju ..
// 2 a) 

foreach ($persons as $person => $h)
{
  echo "<p>Osoba $person je visok/a $h</p>";
  if($h > $max)
  {
    $max = $h;
  }
}

echo "<hr>";

// 2 b )
$srv = 0;
$br = 0;

foreach ($persons as $person)
{
  $srv+=$person;
  $br++;
  
}

// Srednja vrednost
$srv = number_format($srv / $br, 2, '.',' '); 

echo "<p>Srednja vrednost visine je : $srv cm</p>";
foreach ($persons as $person => $h)
{
  if($h > $srv)
  {
    echo "<p>Osoba $person je natprosecno visoka sa  $h cm</p>";
  }
}

// 2 c)

echo "<hr>";
foreach ($persons as $person => $h)
{
  if($h == $max)
  {
    echo "<p>Osoba $person ima maksimalnu visinu sa  $h cm</p>";
  }
}

// 2 d)
echo "<hr>";
foreach ($persons as $person => $h)
{
  if(strpos($person, "V") !== false && $h < $srv)
  {
    echo "<p>Osoba $person ima ispod prosecnu visinu sa $h";
  }
}



 
//  Zadatak 3 
echo "<hr>";
$predmeti = array(
  'Matematika 1' => 8,
  'Mehanika 1' => 7,
  'Engleski' => 10,
  'Masinski materijali' => 6,
  'Inzenjerske graficke komunikacije' => 10,
  'Matematika 2' => 7,
  'Mehanika 2' => 8,
);
$max = $predmeti['Matematika 1'];
$srv = 0;
$br = 0;
// 3 a)
foreach ($predmeti as $predmet => $o)
{
  echo "<p>Student iz $predmet ima ocenu $o</p>";
  if($o > $max)
  {
    $max = $o;
  }
  $srv+=$o;
  $br++;
}
// moglo je sa count($predmeti) umesto $br visak koda...
// Srednja vrednost
$srv = number_format($srv / $br, 1, '.',' '); 


echo "<hr>";
// 3 b)
foreach ($predmeti as $predmet => $o)
{
  
  if($o == $max)
  {
    echo "<p>Student ima ocenu $o iz predmeta $predmet </p>";
  }
}

echo "<hr>";

// 3 c)

echo "<p>prosecna ocena je $srv</p>";
foreach ($predmeti as $predmet => $o)
{
  
  if($o == $max)
  {
    if($o > $srv)
    {
      echo "<p>Student ima vecu ocenu od preseka u $predmet sa ocenom $o</p>";
    }
  }
}

