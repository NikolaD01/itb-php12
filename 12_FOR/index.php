<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  img {
    width: 100px;
  }

  span {
    width: 100px;
    height: 20px;
  }

  .white {
    background-color: white;
    width: 20px;
    height: 20px;
  }

  .black{
    background-color: black;
    width: 20px;
    height: 20px;
  }
</style>
<body>
  
<?php

for($i=1; $i<20; $i+=2)
{
  echo "$i ";
}
echo "<hr>";

for($i=20; $i>1; $i--)
{
  echo "$i ";
}
echo "<hr>";


for($i=0; $i<20; $i+=2)
{
  echo "$i ";
}
echo "<hr>";
for($i=5; $i<=15; $i++)
{
  $pom = $i * 2;
  echo" $pom ";
  echo $i*2 . " ";
}

echo "<hr>";
$sum = 0;
for($i=1; $i<100; $i++)
{
  $sum+=$i;
}
echo $sum;


echo "<hr>";
$sum = 0;
$n = 101;
for($i=1; $i<$n; $i++)
{
  $sum+=$i;
}
echo $sum;


echo "<hr>";
echo "<hr>";
$sum = 0;
$m = 101;
$n=20;
for(; $n<$m; $n++)
{
  $sum+=$n;
}
echo $sum;

echo "<hr>";
$sum = 1;
$m = 10;
$n=1;
for(; $n<$m; $n++)
{
  $sum*=$n;
}
echo $sum;

echo "<hr>";
$sum = 0;
$m = 10;
$n=1;
for(; $n<$m; $n++)
{
  $sum=$sum + $n*$n; // $sum += $n*$n // $sum += $n**2
}
echo $sum;

echo "<hr>";
// Zadtak 10:

/*
1 % 3 = 1 --> 1.jpg

2 % 3 = 2 --> 2.jpg

3 % 3 = 0 --> 3.jpg

4 % 3 = 1 --> 1.jpg

5 % 3 = 2 --> 2.jpg

6 % 3 = 0 --> 3.jpg

*/

$n = 7;

for($i=1; $i <= $n; $i++)
{
  if($i% 3== 1) // 1 % 3 = 1 --> 1.jpg .. 4 % 3 = 1 --> 1.jpg
  {
    echo "<img src='images/1.jpg'>";
  }
  elseif ($i%3 == 2) //  2 % 3 = 2 --> 2.jpg 5 % 3 = 2 --> 2.jpg
  {
    echo "<img src='images/2.jpg'>";
  }
  else // 3 % 3 = 3 --> 3.jpg
  {
    echo "<img src='images/3.jpg'>";
  }
  ; // 1 treba da ide od 1-3 
}

echo "<hr>";
echo "<hr>";
// 2 : Nacin

$n = 7;

for($i=1; $i<=$n; $i++)
{
  $ost = $i%3;
  if($ost == 0)
  {
    $ost = 3;
  }
  echo "<img src='images/$ost.jpg'>";
}
echo "<hr>";
echo "<hr>";
// 3 Nacin switch

// Zadatak
// da je zadatak glasio da treba n puta pisete 3 slike

$n = 4;
for($i=1;$i<=$n; $i++)
{
  for($k=1;$k<=3;$k++)
  {
    echo "<img src='images/$k.jpg'>";
  }
  echo "<br>";
}
echo "<hr>";
echo "<hr>";
// Zadatak
// Koristici for petlje na ekranu ispisati sahovsku tablu

$n = 8;
/*
for($i=1; $i<=$n;$i++)
{
 // Prolazimo kroz for loop 8 puta
 // $i predstavlja u prvom foor loopu kao red
 // kada je $i neparan da pocnemo sa span class="white"
  for($k=1; $k<=$n;$k++) 
  if($i%3==1 && $i%3== 0)
  {
    echo 
    if($k==1)
    {
      $k++;
    }
  }
  else 
  {
  // cilj je da neizmenicno postavljamo span
  
  }
}

*/

$value = 0;
for($col=0; $col <8; $col++)
{
  $value = $col;  // povezujemo sa kolonom 
  // kad je kolona neparna pocinjemo sa crnom a parna sa belom
  for($row = 0; $row<8; $row++)
  if($value%2==0)
  {
    echo "<span class='white'>....</span>";
    $value++; // povecavamo value kako bi bio neparan broj
  }
  else // u slucaju da je 
  {
    echo "<span class='black'>....</span>";
    $value++; // povecavamo kako bi bio paran
  }
  echo "<br>"; // krece nova kolona

}

echo "<hr>";
echo "<hr>";
// Zadatak 10 :

$n = 30;
$sum = 0;
for($i=1;$i<$n;$i++)
{ 
  if($i%9==0)
  {
    $sum+=$i;
  }
}
echo $sum;
echo "<hr>";
echo "<hr>";
// ZADATAK 11 :

$n = 100;
$sum = 1;
for($i=20;$i<$n;$i++)
{
  if($i%11==0)
  {
    $sum*=$i;
  }
}
echo $sum;

echo "<hr>";
echo "<hr>";
// ZADATAK 12 :
$n = 50;
$sum = 0;
for($i=5;$i<$n;$i++)
{
  if($i%13==0)
  {
    $sum++;
  }
}
echo $sum;


echo "<hr>";
echo "<hr>";
// ZADATAK 13 :
echo "zadatak 3 <br>";
$m = 9;
$sum = 0;
$k= 0;
for($n=0;$n<=$m;$n++)
{
  $sum+=$n;
  $k++;
}
$sum = $sum/$k;
echo $sum;


echo "<hr>";
echo "<hr>";
// ZADATAK 14 :

$m = 5;
$sum = 0;
for($n=-30;$n<$m;$n++)
{
  if($n>0)
  {
    $sum++;
  }
}
echo $sum;

echo "<hr>";
echo "<hr>";
// ZADATAK 15 :

$n = 50;
$sum = 0;
for($i=5;$i<$n;$i++)
{
  if($i%3==0 || $i%5==0)
  {
    $sum++;
  }
}
echo $sum;

echo "<hr>";
echo "<hr>";
// ZADATAK 16 :

$m = 44;
$br = 0;
$sum = 0;
for($n=1;$n<$m;$n++)
{ 
  
  // 44 moduo od 10 je 4
  $lastNum = $n%10;
  // sacuvamo modu u varijabli kao poslednji broj
  if($lastNum == 4)
  {
    $br++;
    $sum+=$n;
  }
  
}
echo $br;
echo $sum;

echo "<hr>";
echo "<hr>";
// ZADATAK 16 :

$m = 50;
$n = 5;
$a = 5;
for($i=$n;$i<$m;$i++)
{
  if($i%$a == 0)
  {
    echo "$i ";
  }
}

// 2. Nacin.
echo "<hr>";
echo "<hr>";


$start = ceil($n/$a) * $a; // najevci broj deljiv sa a  
$end = floor($m/$a) * $a; // najmanji broj deljiv sa a 
for($i=$start; $i<=$end; $i+=$a)
{
  echo "$i ";
}

echo "<hr>";
echo "<hr>";
// ZADATAK 17 :

$m = 50;
$n = 5;
$a = 5;
for($i=$n;$i<$m;$i++)
{
  if($i%$a != 0)
  {
    echo "$i ";
  }
}



echo "<hr>";
echo "<hr>";
// ZADATAK 17 :

$n = 50;
$sum = 0;
$a = 5;
for($i=5;$i<$n;$i++)
{
  if($i%$a != 0)
  {
    $sum++;
  }
}

echo $sum;

echo "<hr>";
echo "<hr>";
// ZADATAK 18 :
$n = 16;
$sum = 1;
$a = 5;
$b = 3;
for($i=5;$i<$n;$i++)
{
  if($i%$a == 0 && $i%$b != 0)
  {
    $sum*=$i;
  }
}

echo $sum;


// Zadatak 21:

$sum = 1;
$n =14;
$m = 32;
$a = 5;
$b = 10;
for($i = $n; $i <= $m; $i++)
{
  if($i%$a == 0 && $i%$b !=0)
  {
    $sum*=$i;
  }
}
echo $sum;
?>






























</body>
</html>



