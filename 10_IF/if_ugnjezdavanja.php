<?php
$pol = "z";
$godine = 24;

if ($pol == 'm')
{
  if ($godine >= 18)
  {
    echo "<p>Musko, punoletno</p>";
  }
  else
  {
    echo "<p>Musko, maloletno</p>";
  }
}
else
{
  if($godine >= 18)
  {
    echo "<p>Zensko, Punoletno</p>";
  }
  else
  {
    echo "<p>Zensko, maloletno</p>";
  }
}

$pol = 'z';
$godine = 24;

if ($pol == "m" && $godine >=  18)
{
  echo "<p>Musko, punoletno</p>";
}
elseif($pol == 'm' && $godine <18)
{
  echo "<p>Musko,maloletno</p>";
}
elseif ($pol == 'z' && $godine >= 18)
{
  echo "<p>Zensko, punoletno</p>";
}
else
{
  echo "<p>Zensko, maloletno</p>";
}

// firma radi od 9 do 17h.
$sati = date("H");
if ($sati < 9 || $sati >= 17)
{
  echo "<p>Firma ne radi</p>";
}
else
{
  echo "<p>Fima radi</p>";
}

// Alternativno:
if ($sati >= 9 && $sati <17)
{
  echo "<p>Firma radi</p>";
}
else
{
  echo "<p>Firma ne radi</p>";
}

// zadatak 13
$n = 13;
if (!($n % 2 == 0))
{
  echo "<p>$n je neparan</p>";
}
else 
{
  echo "<p>$p je paran</p>";
}


// Zadatak 17
$a = 5;
$b = 9;
$c = -3;

$max = $a;
if ($b > $max)
{
  $max = $b;
}
if ($c > $max)
{
  $max = $c;
}

$min = $a;
if ($b < $min)
{
  $min = $b;
}
if ($c < $min)
{
  $min = $c;
}

$sr = $a + $b + $c - ($min + $max);
echo "<p>$min <= $sr <= $max</p>";

$temp = 24;

if ($temp < -15 || $temp > 40)
{
  echo "ekstremna temperatura";
}

$year = date('Y');


?>










