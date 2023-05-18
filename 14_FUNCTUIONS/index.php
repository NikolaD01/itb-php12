<?php
function mojaFunkcija()
{
  echo "Moja prva funkcija";
}

$c = "globalni";
mojaFunkcija();

function mojaFunkcija2($tekst)
{
  $b="Nova promenjiva";
  global $c;
  echo "<p>Funkcija sa parametrom: $tekst i $b i $c </p>";
}

mojaFunkcija2('Prvi nacin');
$a ='Drugi nacin';
mojaFunkcija2($a);

$b="van f-je";
mojaFunkcija2($b);


function ispisImena($ime, $prezime)
{
  echo "<p>Ime i prezime je: $ime $prezime</p>";
}

ispisImena('Nikola', 'Devic');
$i = 'Lazar';
$p = 'Lazic';
ispisImena($i, $p);

function ispisImena2($ime, $prezime=null, $godine)
{
  echo "<p>Ime je: $ime";
  if($prezime)
  {
    echo " a prezime je: $prezime";
  }
  echo " ima godina $godine";
  echo "</p>";
}

ispisImena2("Mika", null, 25);
ispisImena2("Mika", "Mikic", 28);

// CONTROL - ENTER DEFINISANJE PARAMETRA U VS CODU


/**
 + f-ja koja sabira dva broja
 * @param int $a - prvi parametar broj
 * @param int $b - drugi parametar broj
 * 
 * @return int - suma dva dobijena broja
 */
function zbir(int $a,int $b)
{
  $c = $a + $b;
  return $c;
}

$pom = zbir(3, 8);
echo "<p>$pom</p>";
zbir(5,8);
zbir(3, '10');
// zbir(3, 'a'); obo nije moguce

echo zbir(zbir(3,5),10);

$a = zbir(4,9);
$b = zbir(5,10);
$c = zbir($a,$b);
echo "<hr>";
echo $c;
echo "<hr>";
echo zbir(zbir(4,9),zbir(5,10));

echo " " . zbir(5,2);

/* include();  //  ne pravi problem ukoliko fajl ne postoj
require(); // pravi Fatal error ako je putanja lose
*/
function uvecaj(&$vrednost, $korak) // sa referencom njena vrednost se menja
{
  $vrednost=$vrednost+$korak;
}

echo "<hr>";
$a = 10;
uvecaj($a,2);
echo $a;


// Zadatak 1:
echo "<hr>";

function neparan($a)
{
  
  if($a%2==0)
  {
    $rez = false;
  }
  else
  {
    $rez = true;
  }
  
  return $rez;
}

$a = 15;
if(neparan($a))
{
  echo "<p>Broj $a je neparan</p>";
}
else
{
  echo "<p>Broj $a je paran</p>";
}

// Zadatak 2:
echo "<hr>";
function maks2($a, $b)
{
  if($a > $b)
    {
      return $a;
    }
    else
    {
      return $b;
    }
}

$broj1 = 15;
$broj2 = 45;
$veci=maks2($broj1,$broj2);
echo "<p>Veci od $broj1 i $broj2 je $veci</p>";

function maks4($a, $b , $c, $d)
{
 /*
  $maksAB = maks2($a,$b);
  $maksCD = maks2($c,$d);
  $maks = maks2($maksAB,$maksCD);
  return $maks;
  */
  return maks2(maks2($a,$b),maks2($c,$d));
}

$b1 = 10;
$b2 = 20;
$b3 = 0;
$b4 = 10;
$r= maks4($b1,$b2,$b3,$b4);
echo "<p>Maksimalni od brojeva $b1,$b2,$b3,$b4 je $r</p>";

// globalna funckija

function kub($a)
{
  return $a*$a*$a;
}

$broj = 10;
$broj = kub($broj);
echo "<p>$broj</p>";

function povecaj(&$a, $korak = 10) // po referenci funkcija modifikuje njegovu vrednost
{
  $a = $a + $korak;
}

$broj = 15;
povecaj($broj);
echo "<p>$broj</p>";
// OVO KORISTITI OVO KORISTITI OVO KORISTITI OVO KORISTITI OVO KORISTITI OVO KORISTITI OVO KORISTITI 
function povecaj2($a, $korak = 10) 
{
return $a + $korak;
}

$broj = 15;
$broj = povecaj($broj);
echo "<p>$broj</p>";
// OVO KORISTITI OVO KORISTITI OVO KORISTITI OVO KORISTITI OVO KORISTITI OVO KORISTITI OVO KORISTITI 
function proba($a=null, $b=3, $c=10)
{
  if(is_null($a)) $a=1;
  return $a+$b+$c;
}
echo proba(null, 33);

// 3 zadatak

function slika($url)
{
  echo "<img src='$url'>";
}
slika("https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Google_Images_2015_logo.svg/1200px-Google_Images_2015_logo.svg.png");


// Zadatak 4;

echo "<hr>";

function obojenaRec($boja, $tekst)
{
  echo "<p stlye='color:${boja}'>$tekst</p>";
}

obojenaRec('red','Verry colorful Text');

// ZadataK 5:
function recenica($tekst)
{
  for($i=10;$i<35;$i+=5)
  {
    echo "<p style='font-size: ${i}px;'>$tekst</p>";
  }
}

// ZadataK 6:

echo "<hr>";

recenica('Veryy big Line');

function recenica2($font)
{
  echo "<p style='font-size: ${font}px'>Test</p>";
}


// ZadataK 7:

echo "<hr>";

for($i=10;$i<35;$i+=5)
{
  recenica2($i);
}

// ZadataK 8:

echo "<hr>";

function aritmeticka($n,$m)
{
  if($n>=$m)
  {
    return "<p>Pogresno uneti parametri</p>";
  }
  $sum = 0;
  $br = 0;
  for($i=$n;$i<$m;$i++)
  {
    $sum+=$i;
    $br++;
  }

 return  $sum/$br;
  

}

echo aritmeticka(1,25);
echo aritmeticka(5, 0);
// Zadatak 9 

echo "<hr>";

function aritmetickaCifre($n,$m)
{
  if($n>=$m)
  {
    return "<p>Pogresno uneto</p>";
  }
  $sum = 0;
  $br = 0;
  for($i=$n;$i<=$m;$i++)
  {
    $num = $i;
    $lastNum = $num%10;
    if($lastNum == 3)
    {
      $sum+=$num;
      $br++;
    }
  }
  return  $sum/$br;
}


echo aritmetickaCifre(25,53);

// Primer sa casa 
echo "<hr>";

function aritmetickaCifre2($n,$m)
{
  $sum = 0;
  $br = 0;
  for($i=$n;$i<=$m;$i++)
  {
    if($i%10==3)
    {
      $sum+=$i;
      $br++;
    }
  }
  if($br)
    {
      return $sum/$br;
    }
    else
    {
      return "<p>U opsegu nema brojeva koji zadovoljavaju uslov</p>";
    }
}

echo aritmetickaCifre2(5,35);

// Zadatak 9

function praksa($n, $a, $d)
{
  /*$ukupno = $a;
  for($i=2;$i<=$n;$i++)
  {
    $ukupno+=$a+$d;
  }*/
  // return number_format($ukupno,2,',','.'); // $ukupno = $a + ($n -1) * ($a + $d);
  return number_format($a + ($n -1) * ($a + $d),2,',','.');
}

function praksa2($n, $a, $d)
{ /* 
  $ukupno = 0;
  for($i=1;$i<=$n;$i++)
  {
    $ukupno+=$a+$d;
  } */
  return number_format($n * ($a + $d) - $d,2,',','.');
  // return $ukupno -$d; // $ukupno = $n * ($a + $d) - $d;
} 

echo "<hr>";
$n = 10;
$a = 1000;
$d = 120;

echo praksa2($n,$a,$d);

// Zadatak 10:

echo "<hr>";

$niz = [2,5,7,11,40,23,50];

for($i=0;$i<count($niz);$i++)
{
 if(neparan($niz[$i]))
 {
  echo "<p>$niz[$i]</p>";
 }
}

// Zadatak 11:

echo "<hr>";

function brojNeparnih($a)
{
  $br = 0;
  for($i=0;$i<count($a);$i++)
  {
    if($a[$i]%2!=0)
    {
      $br++;
    }
  }
  return $br;
}

$broj = brojNeparnih($niz);
if($broj)
{
  echo "Broj neparnih brojeva je $broj";
}
else
{
  echo "Nema neparnih brojeva";
}

// Zadatak 12:

function najnizaTemp($arr)
{
  $minTemp=100;
  $minDatum="";
  $minDan = 0;
  $dan=1;
  foreach($arr as $datum => $temp)
  {
    if($minTemp>$temp)
    {
      $minTemp=$temp;
      $minDatum = $datum;
      $minDan = $dan;
    }
    $dan++;
  }
  $dani = ['Ponedeljak','Utorak','Sreda','Cetvrtak','Petak'];
  echo "<p style='color: blue'>". $dani[$minDan-1] .  " ". $minDatum . " " . $minTemp . "</p>";
}

$niz = [
  '01.05.2023' => 19,
  '02.05.2023' => 22,
  '03.05.2023' => 18,
  '04.05.2023' => 15,
  '05.05.2023' => 25
];

najnizaTemp($niz);