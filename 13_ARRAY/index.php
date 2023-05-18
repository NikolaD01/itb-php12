<?php


// sa nizovima
$cars = ["BMW","Volvo","Toyota"];
// Elemti ovog niza su: "BMW" , "Volvo" , "Toyota"
// Indeksi ovog niza su: 0, 1, 2
// More detailed information with type and length of data
var_dump($cars);
echo "<hr>";
// More human readble 
print_r($cars);
echo "<hr>";

$prviElment = $cars[0];
$drugiElment = $cars[1];
$treciElment = $cars[2];

echo "$prviElment, $drugiElment, $treciElment";
echo "<hr>";
// echo "Pozicija na $cars[8]"; 

// Izmena elemenata
// Ako postoji elemnt na indexu menjamo ga
$cars[1]="Peuqeot";
print_r($cars);
echo "<hr>";
// ako ne postoji uvodimo novi element
$cars[30]="Fita";
print_r($cars);

////////////////
echo "<hr>";
$polaznici = []; // Prazan niz
$polaznici[] = "Aleksandar"; // na kraj niza dodati // 
// isto ko array push array push moze vise elemenata
$polaznici[] = "Uros";
$polaznici[] = "Milijana";
$polaznici[] = "Andreja";
$polaznici[] = "Nikola";
var_dump($polaznici);
echo "<hr>";
// count prebrojava koliko ima elemenata u nizu
$duzina = count($polaznici);
echo $duzina;

echo "<hr>";
for($i=0;$i<$duzina;$i++)
{
  echo "<p>$polaznici[$i]</p>";
}

echo "<hr>";
// 2. Zadatak :

$brojevi = [5,14,-4,0,11,-7,9];
$suma = 0;
for($i=0;$i<count($brojevi);$i++)
{
  $suma+= $brojevi[$i];
  
}

echo "Suma elemenata niza je: $suma";

// ugradjena funkcija za racunanje sume
$zbir = array_sum($brojevi);
echo "<p>Zbir elemenata niza je: $zbir</p>";

// 3. Zadata ;
$brElemenata = count($brojevi);
$arsr = $zbir / $brElemenata; // 

// postavljamo na 0
$brojevi = [];
$brElemenata = count($brojevi);
echo "<p>Aritemticka sredina je: $arsr</p>";
// dopuna 1. nacin
if($brElemenata == 0)
{
  echo "<p>Prazan niz = aritmetmicka sredina je 0</p>";
}
else 
{
  $arsr = $zbir / $brElemenata;
  echo "<p>Aritemticka sredina je: $arsr</p>";
}

// dopuna -2 nacin
if($brojevi == [])
{
  echo "<p>Prazan niz = aritmetmicka sredina je 0</p>";
}
else 
{
  $arsr = $zbir / $brElemenata;
  echo "<p>Aritemticka sredina je: $arsr</p>";
}

// dopuna -3 nacin
if(empty($brojevi))
{
  echo "<p>Prazan niz = aritmetmicka sredina je 0</p>";
}
else 
{
  $arsr = $zbir / $brElemenata;
  echo "<p>Aritemticka sredina je: $arsr</p>";
}

echo "<hr>";

// Zadatak 4 :
$brojevi = [5,14,-4,0,11,-7,9,91]; // pamtimo najveci pamtimo ga ako je sledeci veci postavimo ga
$maks = $brojevi[0]; // uzimamo prvi elemnt niza
for($i=0;$i<count($brojevi);$i++)
{
  if($maks <$brojevi[$i])
  {
    $maks = $brojevi[$i];
  }
}
echo "Maksimalna vrednost niza je: $maks";

echo "<hr>";
// Zadatak 5 :

$min = $brojevi[0];
for($i=0;$i<count($brojevi);$i++)
{
  if($min >$brojevi[$i])
  {
    $min = $brojevi[$i];
  }
}
echo "Miimalna vrednost niza je: $min";

// Zadatak 6 :
// odrediti indeks najveceg broja niza 



for($i=0;$i<count($brojevi);$i++)
{
  if($maks <$brojevi[$i])
  {
    $maks = $brojevi[$i];
  }
}
echo "<p>Maksimalna vrednost niza je: $maks</p>";
$pozicijaMaks = array_search($maks,$brojevi);
echo "<p>Index maksimalne vrednosti niza $pozicijaMaks</p>"; 
echo "<hr>";


 

$brojevi = [5,14,-4,14,11,-7,14];
// 6.1 Indeks prvog pojavljivanja max elementa
$max = $brojevi[0];
$indexMax = 0;
for($i=0;$i<count($brojevi);$i++)
{
  $trenutniElement = $brojevi[$i];
  if($trenutniElement>$max)
  {
    $max = $trenutniElement;
  }
}
for($i=0;$i<count($brojevi);$i++)
{
  $trenutniElement = $brojevi[$i];
  if($treciElment == $max)
  {
    $indexMax = $i;
    $break;
  }
}

// Nacin 6.2
for($i=0;$i<count($brojevi);$i++)
{
  $trenutniElement = $brojevi[$i];
  if($trenutniElement>$max)
  {
    $max = $trenutniElement;
    $indexMax = $i;
  }
}


// Nacin 6.2 trenutni element da se vise puta pojavljuje
for($i=0;$i<count($brojevi);$i++)
{
  $trenutniElement = $brojevi[$i];
  if($trenutniElement>=$max)
  {
    $max = $trenutniElement;
    $indexMax = $i;
  }
}

echo "<hr>";

// zadatak 7 :
$brojevi = [5,14,-4,0,11,-7,9,91];
$zbir = array_sum($brojevi);
$brElemenata = count($brojevi);
$arsr = $zbir / $brElemenata;
$veciBrojevi = [];
$sum = 0;
for($i=0;$i<count($brojevi);$i++)
{
  $numB = $brojevi[$i];
  if($arsr < $numB)
  {
    $veciBrojevi[] = $numB;
    $sum++;
  }
}
print_r($veciBrojevi);
echo "suma brojeva $sum";

// Nastavni primer
/*
$zbir = 0;
$broj++;
for($i = 0;$i< count($brojevi); $i++)
{
  $zbir += $brojevi[$i];
  $arsr = $zbir / count($brojevi);
  if ($brojevi[$i] > $arsr)
  {
    $broj++;
  }
}
*/

// kod koji radi
$zbir = 0;
$broj = 0;
for($i = 0;$i< count($brojevi); $i++)
{
  $zbir += $brojevi[$i];
}
$arsr = $zbir / count($brojevi);
for($i = 0;$i< count($brojevi); $i++)
{
  if ($brojevi[$i] > $arsr)
  {
    $broj++;
  }
}
  
echo "<p>Broj brojeva vecih od srednje vrednosti niza je : $broj</p>";

// 8 Zadatak


$zbir = 0;
for($i = 0; $i < count($brojevi); $i++)
{
  if($brojevi[$i] > 0)
  {
    $zbir += $brojevi[$i];
  }
}

echo "<p>zbir pozitivnih elemenata niza je: $zbir</p>";

// Zadatak 9

$brojevi = [2,5,6,10,15];
echo "<hr>";
$sum = 0;
$broj = 0;
for($i = 0; $i < count($brojevi); $i++)
{
  if($brojevi[$i]%2==0)
  {
    $zbir += $brojevi[$i];
    $broj++;
  }
}
if ($broj != 0)
{
  $srvr = $zbir / $broj;
}
else
{
  $srvr = 0;
}


echo "<p>Srednja vrednost parnih elemenata u nizu = $srvr</p>";
echo "Ovo je broj parnih brojeva niza : $sum";

echo "<hr>";

// Zadatak 10

$sum = 0;
for($i = 0; $i < count($brojevi); $i++)
{
  if($i%2==0)
  {
    $sum+=$brojevi[$i];
  }
}

echo "Ovo je suma parnih indexa niza : $sum";

// Zadatak 11
$brojevi = [2,-5,6,-10,15];
$brojeviOpposit = [];
echo "<hr>";
for($i = 0 ; $i < count($brojevi); $i++)
{
  $num = $brojevi[$i] * -1;
  $brojeviOpposit[] = $num;
}

print_r($brojeviOpposit);

// Zadatak 11
$brojevi = [2,-5,6,-10,15];

echo "<hr>";
for($i = 0 ; $i < count($brojevi); $i++)
{
  if($brojevi[$i]<0)
  {
    $brojevi[$i] = $brojevi[$i] * -1;
  
  }
  
}


print_r($brojevi);

echo "<hr>";
// Zadatak 12 
$brojevi = [2,-5,6,-10,15,20,30,35,-23,-3,5,-6];
for($i = 0;$i < count($brojevi); $i+=2)
{
  if($brojevi[$i]%2 != 0)
  {
    $brojevi[$i] = $brojevi[$i] * -1;
  }
}

print_r($brojevi);

// Zadatak 13

echo "<hr>";
$br = 0;
for($i=0;$i < count($brojevi);$i+=3)
{
  if($brojevi[$i]%2 == 0)
  {
    $br++;
  }
}
echo $br;

// Zadatak 14
echo "<hr>";

$stringArray= ['World','Hello','Now','Class','Exam','Ateria'];
for($i = 0;$i< count($stringArray);$i++)
{
  echo strlen($stringArray[$i]) . " ";
}

// primer sa casa 
echo "<hr>";

$stringArray= ['World','Hello','Now','Class','Exam','Ateria'];
for($i = 0;$i< count($stringArray);$i++)
{
  $ime = $stringArray[$i];
  $duzina = mb_strlen($ime, "UTF-8"); // za stampanje srpske latinice
  echo "<p>Duzina stringa $ime je $duzina </p>";
}


// Zadatak 15
/*
echo "<hr>";
$stringArray= ['World','Hello','Now','Class','Exam','Ateria'];
for($i = 0;$i< count($stringArray);$i++)
{
  $stringArray[$i] = strlen($stringArray[$i]);
}
print_r($stringArray);
$max = 0;
for($i = 0;$i< count($stringArray);$i++)
{
  
  if($stringArray[$i] > $max)
  {
    $max = $stringArray[$i];
  }
}

echo "<p>Element sa najduzom duzinom se nalazi na indexu: $max</p>";
*/
// Primer sa casa 
echo "<hr>";
$stringArray= ['World','Hello','Now','Class','Exam','Ateria'];
$stringMaxDuzine = $stringArray[0];
$maxDuzina = strlen($stringArray[0]);
for($i = 1;$i< count($stringArray);$i++) // ispitivanje od 0 je nepotrebno jer je zadaot na pocetku
{
  if($maxDuzina < strlen($stringArray[$i]))
  {
    $maxDuzina = strlen($stringArray[$i]);
    $stringMaxDuzine = $stringArray[$i];
  }
}

echo "<p>Element niza sa maksimalnom duzinom je: $stringMaxDuzine</p>";

// Zadatak 17.

// Koristimo funckiju strpos($strl, $str2)
// Rezultat poziva ove funkciej:
// 1) Ako se $str2 nalazi unutar $strl, onda se vraca index prog pojavljivanja
// Logic Vrednost

var_dump(strpos("Sredaaaa", "a"));
var_dump(strpos("Sredaaaa", "s"));

// ispitujemo da li je razilicito i po vrednosti i po tipu
// da li se slovo nalazi uvek se ispituje sa !== false 
// razilicto od false i po vrednosti i po tipu

if(strpos("Sreddaa", "s") !== false)
{
  echo "<p> 's' se nalazi u stringu 'Sredaaa' </p>";
}
else
{
  echo "<p> 's' se ne nalazi u stringu 'Sredaaa' </p>";
}



$brojSadrzaja = 0;
for ($i = 0; $i < count($stringArray); $i++)
{
  if(strpos($stringArray[$i], 'a') !== false)
  {
    $brojSadrzaja++;
  }
}

echo "<p>Broj stringova koji sadrze slovo 'a' je $brojSadrzaja</p>"; 

// Zadatak 18

$brojPocinjeA = 0;
for ($i = 0; $i < count($stringArray); $i++)
{
  // if($stringArray[$i][0] == 'a' || $stringArray[$i][0] == 'A')
  if(strpos($stringArray[$i], 'a') === 0  || strpos($stringArray[$i], 'A') === 0)
  {
    $brojPocinjeA++;
  }
}

echo "<p>Broj stringova koji sadrze slovo 'a' ili 'A' je $brojSadrzaja</p>"; 

// Dodatni napredni zadaci:
// 19 zadatak
echo "<hr>";
echo "<p>Zadatak 19</p>";
$a = array(
  -1,
  -2,
  3,
  -4,
  5,
  6,
  -7,
  9
);

$b = [];
$br = 0;
for($i=0;$i<count($a);$i++)
{
  if($a[$i] >= 0)
  {
    $b[$br] = $a[$i];
    $br++;
  }
}

print_r($b);
// ZAdatak 20;
echo "<hr>";
echo "<p>Zadatak 20</p>";
$c = [];
$br = 0;
for($i=0;$i<count($a);$i++)
{
  $c[$br] = $a[$i];
  $c[$br] = $b[$i];
  $br++;
  
  
}
print_r($c);

// 21 zadatak
echo "<hr>";
echo "<p>Zadatak 21</p>";
$a = array(
  1,
  2,
  3,
  4,
  5,
  6,
  7,
  9
);
$b = array(
  1,
  2,
  3,
  4,
  5,
  6,
  7,
  9
);
$c = array();
for($i=0;$i<count($b);$i++)
{
  $c[$i] = $a[$i] * $b[$i];
}

print_r($c);

// Asocijativni Nizovi

