<?php

// Zadatak 1 

$a = 19.35;
//Urnani operator (prihvata jednu vrednost)
$b = -3.14;

// Binarni operator (prihvata dve vrednosti)
if ($a > $b)
{
  echo "<p>Veci je broj $a</p>";
}
else
{
  echo "<p>Veci je broj $b</p>";
}

// Alternativno  

// Ternani operator (Prihvati tri vrednosti) 
echo "<p>Veci je broj ". ((a > b) ? $a : $b) ."</p>";



// Zadtak 4 

$dobaDana = date("a"); // dobijamo am ili pm iz racunara u zavisnosti koje je vreme;
if ($dobaDana = "am")
{
  echo "<p>Pre podne</p>";
} else
{
  echo "<p>Posle podne</p>";
}


// Alternativno 
if ($dobaDana == "pm")
{
  echo "<p>Posle podne</p>";
} else
{
  echo "<p>Pre podne</p>";
}


// Zadatak 3 


$pol = "Z";
if ($pol == "M")
{
  echo "<p><img src='images/m_360.png' alt='muski pol'></p>";
} else 
{
  echo "<p><img src='images/f_360.png' alt='zenski pol'></p>";
}


// Zadatak 2 

$temp = 32;

if ($temp >= 0) 
{
  echo "<p>Napolju je toplo ima +$temp stepena</p>";
} else 
{
  echo "<p>Napolju je hladno ima $temp stepena</p>";
}

// Zadatak 5

$yearNow = date("Y");
$bornYear = 2001;
$Age = $yearNow - $bornYear;
if ($Age >= 18) 
{
  echo "Osoba je punoletna";
} else
{
 echo "Osoba je maloletna";
}

// Zadatak 6

$a = 9;
$b = -6;
$c = 6;

if ($a > $b)
{
  $pom = $a;
  $a = $b;
  $b = $pom;
} 

// Nakon ovog if-a u $a je sigurno manja vrednost nego u $b

if ($a > $c) 
{
  $pom = $a;
  $a = $c;
  $c = $pom;
}

//  Nakon ovog if-a u $a je sigurno najmanja vrednost od zadate tri

if ($b > $c)
{
  $pom = $b;
  $b = $c;
  $c = $pom;
}

// Nakon ovog if-a  u $a <= $b <= $c 


echo "<p>$a <= $b <= $c</p>";



?>