<?php
$i = 0;
while ($i <5){
  echo "<p>$i</p>";
  $i++;
}


echo "<hr>";

$i = 1;
while ($i <= 20)
{
  echo "$i ";    
  $i++;
}

echo "<hr>";

$i = 20;
while ($i >= 1)
{
  echo "$i ";    
  $i--;
}

echo "<hr>";

$n = 5;
$i = 1;
while ($i <= $n)
{
  if($i%3 == 0)
  {
    echo "<p style='color:red;'>Hello $i</p>";
  }
  elseif($i%3 == 1)
  {
    echo "<p style='color:blue;'>Hello $i</p>";
  }
  else
  {
    echo "<p style='color:green;'>Hello $i</p>";
  }
  
  $i++ ;
}
// 2. nacin

$n = 5;
$i = 1;
while ($i <= $n)
{
  
  if($i%3 == 0)
  {
    $boja = "purple";    
  }
  elseif($i%3 == 1)
  {
    $boja = "lime";
  }
  else
  {
    $boja = "magenta";
  }
  echo "<p style='color:$boja;'>Hello $i</p>";
  $i++ ;
}

// 3. nacin

$n = 5;
$i = 1;
while ($i <= $n)
{
  $boja = "magenta";
  if($i%3 == 0)
  {
    $boja = "purple";    
  }
  elseif($i%3 == 1)
  {
    $boja = "lime";
  }
 
  echo "<p style='color:$boja;'>Hello $i</p>";
  $i++ ;
}


// Zadatak 3 :
echo "<hr>";
$i = 1;

while($i <=20)
{
  if($i%2 == 0)
  {
    echo "$i ";
  }
  $i++;
}

echo "<hr>";

// Zadatak 5 :

$n = 5;
$i = 0;
while ($i <= $n)
{
  $stil = 'solid';
  if($i%2==0)
  {
    $stil = 'dotted';
  }

  echo "<img style='border: 2px $stil black;'src='#'>";
  echo "<br>";
  $i++;
}

echo "<hr>";
// Dodatni zadatak

$n = 5;
$i = 1;

while ($i <= $n)
{
  $r1 = rand(0, 99);
  $r2 = rand(0, 99);
  $r3 = rand(0, 99);

  echo "<p style='color: #$r1$r2$r3'>Hello world !!</p>";
  $i++;
}

echo "<hr>";
// Zadatak 6 :
// Odrediti sumu brojeva od 1-100

$i = 1;
$suma = 0; 
while ($i <= 100){
  $suma += $i; // Na sumu dodajemo i znaci 0 + 1 = 1 | 1 + 2 = 3 itd...
  $i++;

}
echo "<p>Suma brojeva od 1 do 100 je $suma</p>";

echo "<hr>";

// Zadatak 7 :
// Odrediti sumu brojeva od 1-n 

$i = 1;
$n = 230;
$suma = 0; 
while ($i <= $n){
  $suma += $i; 
  $i++;

}
echo "<p>Suma brojeva od 1 do $n je $suma</p>";

echo "<hr>";
// Zadatak 8:
// Odrediti sumu brojeva od n-m;
$np = 15;
$n = 15;
$m = 151;
$suma = 0; 
while ($n <= $m){
  $suma += $n; 
  $n++;

}
echo "<p>Suma brojeva od $np do $m je $suma</p>";

echo "<hr>";

// Zadatak 9 :


$n = 15;
$np = $n;
$m = 151;
$suma = 1; 
while ($n <= $m){
  $suma *= $n; 
  $n++;

}
echo "<p>Suma brojeva od $np do $m je $suma</p>";

echo "<hr>";

// Zadatak 10 :


$n = 15;

$m = 151;

$sumaKvadrata = 0;
$sumaKuba = 0; 
while ($n <= $m){
  
 if($n%2 == 0)
 {
  $sumaKvadrata = $n * $n;
 }
 elseif($n%3 == 0)
 {
  $sumaKuba = $n * $n * $n;
 }
 $n++;
}

echo "suma kvadrata = $sumaKvadrata suma kuba = $sumaKuba;";

echo "<hr>";

// Zadatak 11 :

$i = 1;
$m = 15;
$k = 0;

while ($i <= $m)
{
  
  if($m%$i == 0)
  {
    $k++;
  }
  $i++;
  
}
echo "$m je deljivo sa $k brojeva <br>"; 
echo "<hr>";

// Zadatak 12 :

// 1 nacin:
echo "<hr>";
// prosti brojevi su brojevi koji su deljivi samo sa 2 broja (sa 1 i sa samim sobom)
$i = 1; // iterator koji pokusava da deli unet broj $m
$m = 13; // uneti broj
$k = 0; // sa koliko je deljiv uneti broj
while ($i <= $m)
{
  
  if($m%$i == 0)
  {
    $k++;
  }
  $i++;
}
if($k ==2)
{
  echo "<p>broj $m je prost</p>";
}
else
{
  echo "<p>Broj $m nije prost</p>";
}
echo "<hr>";
// 2. nacin
// svaki broj je deljiv sa 1 pa ne zapisujemo.
// ne ispitujemo da li je $k deljiv sa $k jer znamo da jeste
$k = 6;
$i = 2;

$prost = true;
while($i <= sqrt($k))  // ako broj  nema delioca do svog kvadratnog korena on je prost
{
  if($k % $i == 0) // ako je broj deljiv sa bilo kojim brojem znamo da nije prost
  {
    $prost = false;
    break; // stopiramo while loop jer smo nasli momenat kad broj nije prost
  }
  $i++;
}

if($prost == true)
{
  echo "broj je prost";
}
else
{
  echo "broj nije prost";
}

// Zadatak 13 :
echo "<hr>";
$sum = 1;
$i = 20; // iterator
$n = 1;
// 10000 je uslov if (break na 10000)

while($i > $n)
{
  $sum*=$i;
  if($sum > 10000)
  {
    echo "<p style='color: red;'>$sum</p>";
    echo "<p style='color: green;'>$i</p>";
    break;
  }
  $i--;
}




// Zadatak 14 :

// mnozimo ga samim sobom dok ne predjes
echo "<hr>";
$n1 = 2;
$n2 = 13;
$br = 0;
  echo "<p style='color: blue;'>$n1</p>";
  
  
  while($br < $n2)
  {
    if($n1 < $n2)
    {
      $n1*=$n1;
      echo "<p style='color: green;'>$n1</p>";
    }
    else
    {
      echo "<h1>GRESKA</h1>";
      break;
    }
    $br++;
  }


  echo "<hr>";

  // Nacin 2
$n1 = 2;
$n2 = 13;
$br = 0;
  echo "<p style='color: blue;'>$n1</p>";
  

  // Predpostavljam da su brojevi
 if($n1 < $n2) // Pokrenuti ako je $n1 manji od $n2
 {
  while($br < $n2) // Pokrenuti while loop 
  {
    if($n1 < $n2)
    {
      $n1*=$n1;
      
    }
    else
    {
      echo "<p style='color: green;'>$n1</p>";
      break;
    }
    
    $br++;
  }
 }
 else
 {
  echo "<h1>GRESKA</h1>";
 } 




 echo "<hr>";


  // Nacin 3
$n1 = 2;
$n2 = 13;
$sum = 1;

  echo "<p style='color: blue;'>$n1</p>";
  

  // Predpostavljam da su brojevi
 if($n1 <= $n2) // Pokrenuti ako je $n1 manji od $n2
 {
  $sum = $n1;
  while($n1 <= $n2) // Pokrenuti while loop 
  {
    $sum*=$n1;
  }
  echo "<p style='color: green;'>$n1</p>";
 }
 else
 {
  echo "<h1>GRESKA</h1>";
 } 