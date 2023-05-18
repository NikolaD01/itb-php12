<?php


$broj = 10;

if ($broj <= 10)
{
  echo "<p>Broj prve desetice</p>";
} 
elseif ($broj <= 20)
{
  echo "<p>Broj druge desetice</p>";
}
else
{
  echo "<p>Broj veci od 20</p>";
}

// Alterantivno:

if ($broj > 20) 
{
  echo "<p>Broj veci od 20</p>";
}
elseif ($broj > 10)
{
  echo "<p>Broj druge desetice</p>";
} 
else 
{
  echo "<p>Broj prve desetice</p>";
}


// Zadatak 7:

$poeni = 71;
if ($poeni <= 50) 
{
  echo "<p>Student je pao ispit</p>";
} 
elseif ($poeni <= 60)
{
  echo "<p>Student je dobio 6</p>";
}
elseif ($poeni <= 70)
{
  echo "<p>Student je dobio 7</p>";
}
elseif ($poeni <= 80)
{
  echo "<p>Student je dobio 8</p>";
}
elseif ($poeni <= 90)
{
  echo "<p>Student je dobio 9</p>";
}
else
{
  echo "<p>Student je dobio 10</p>";
}


// 8 zadatak

$date = date('l'); // w numeric representation of day from 0 - 6 

//$date = date('w');
//if ($dan == 0) 
//{
//  echo "<p>Vikend</p>";
//}
//elseif ($dan == 6) 
//{
// echo "<p>Vikend</p>";
//}
//else
//{
//  echo "<p>Radni dan</p>";
//}
 

if ($date == "Monday")
{
  echo "Radni dan";
}
elseif ($date == "Tuesday")
{
 echo "Radni dan";
}
elseif ($date == "Wednesday")
{
 echo "Radni dan";
}
elseif ($date == "Thursday")
{
 echo "Radni dan";
}
elseif ($date == "Friday")
{
 echo "Radni dan";
}
elseif ($date == "Saturday")
{
  echo "Vikend";
}
else
{
  echo "Vikend";
}


// 9 Zadatak
echo "<br>";

date_default_timezone_set('Europe/Belgrade');
$time = date("H:i");

echo $time;

if ($time < 12) 
{
  echo "<p>Dobro jutro</p>";
} 
elseif ($time < 18)
{
  echo "<p>Dobar dan</p>";
}
else
{
  echo "<p>Dobro Vece</p>";
}

// Alternativno

if($time >= 18)
{
  echo "<p>vece</p>";
}
elseif ($time >= 12)
{
echo "<p>Podne</p>";
}
else
{
echo "<p>Jutro</p>";
}

// 10. 3 promenjive po datumu

$dayOne = 3;
$monthOne = 3;
$yearOne = 2012;

$dayTwo = 4;
$monthTwo = 3;
$yearTwo = 2012;

if ($yearOne > $yearTwo)
{
  echo $dayOne . "." . $monthOne . "." . $yearOne;
}
elseif ($yearOne == $yearTwo) 
{
  if ($monthOne > $monthTwo)
  {
    echo $dayOne . "." . $monthOne . "." . $yearOne;
  }
  elseif ($monthOne == $monthTwo)
  {
      if ($dayOne > $dayTwo)
      {
        echo $dayOne . "." . $monthOne . "." . $yearOne;
      }
      elseif ($dayOne == $dayTwo)
      {
        echo "Datumi su isti";
      }
      else 
      {
        echo $dayTwo . "." . $monthTwo . "." . $yearTwo;
      }
  }
  else 
  {
    echo $dayTwo . "." . $monthTwo . "." . $yearTwo;
  }
}
else
{
  echo $dayTwo . "." . $monthTwo . "." . $yearTwo;
}


// Alternativno 


// Zadatak 11

$time = date("H:i");
// $timeTest = 11;
if ($time <= 17)
{
  if ($time >= 9)
  {
    echo "<p>Firma radi</p>";
  }
  else
  {
    echo "<p>Frima ne radi</p>";
  }
}
else 
{
  echo "<p>Frima ne radi</p>";
}

// Zadatak 12
// Prvi lekar

$p1 = 9;
$k1 = 17;

// Drugi lekar
$p2 = 11;
$k2 = 18;

if ($k1 < $p2)
{
  echo "<p>Ne poklapa se smena</p>";
}
elseif ($k2 < $p1)
{
  echo "<p>Ne poklapa se smena</p>";
}
else
{
  echo "<p>Smene se poklapaju</p>";
}

// Zadatak 13
$n = 13;
if ($n%2 == 0 )
{
  echo "<p>broj paran</p>";
}
else
{
  echo "<p>Broj nije paran</p>";
}

// Zadatak 14

if ($n%3 == 0)
{
  echo "<p>Broj ej deljiv sa 3</p>";
}
else 
{
  echo "<p>Broj nije deljiv sa 3</p>";
}


// Zadatak 15
$n1 = 8;
$n2 = 6;

if ($n1 > $n2)
{
  $n3 = $n1 - $n2;
  echo $n3;
}
else
{
  $n3 = $n2 - $n1;
  echo $n3;
}


// Zadatak 16
echo "<br>";
$n = 2;
if ($n <= 0) 
{
  echo --$n;
}
else 
{
  echo ++$n;
}


// Zadatak 17
$n1 = 1; //4 //5
$n2 = 4; // 1
$n3 = 5; // 4

echo "<br>";

if ($n1 < $n2)
{
  $pom = 0;
  $pom = $n1;
  $n1 = $n2;
  $n2 = $pom;
  if ($n1 < $n3)
  {
    $pom = 0;
    $pom = $n1;
    $n1 = $n3;
    $n3 = $pom;
    echo "$n1 je najveci";
    if ($n2 < $n3)
    {
      $pom = 0;
      $pom = $n2;
      $n2 = $n3;
      $n3 = $pom;
      echo "$n2 je srednji";
      echo "$n3 je najmanji";
    }
  }
}

if ($year%4 == 0 || $year%400 == 0)
{
  echo "Godina je prestupna";
} elseif ($year%100 == 0)
{
  echo "Godina nije prestupna";
} else
{
  echo "Godina nije prestupna";
}



?>
