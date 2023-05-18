<?php 

$letovi = array(
  "Beograd" => 102,
  "Milano" => 205,
  "Madrid" => 146,
  "Berlin" => 205,
  "New York" => 190
);

function maxBrojPutnika($a)
{
  $maxPutnika = 0;
  foreach($a as $v)
  {
    if($maxPutnika<$v)
    {
      $maxPutnika = $v;
    }
  }
  return $maxPutnika;
}


$maxPutnika = maxBrojPutnika($letovi);

echo "<p>$maxPutnika</p>";
// Zadatak 3
function brojMax($a)
{
  $maxPutnika=maxBrojPutnika($a);
  $br=0;
  foreach($a as $v)
  {
    if($maxPutnika == $v)
    {
      $br++;
    }
  }
  return $br;
}

$brojMax = brojMax($letovi);
echo "<p>$brojMax</p>";
// Zadatak 4
function prosek($a)
{
  $avrage = 0;
  $br= 0;
  foreach($a as $v)
  {
    $avrage+=$v;
    $br++;
  }
  $avrage = $avrage / $br;
  return round($avrage);
}

$prosekNis = prosek($letovi);
echo "<p>$prosekNis</p>";
// Zadatk 5;
function isplativ($a,$granica)
{
  $brojLetova = 0;
  $brojIsplativih= 0;
  foreach($a as $v)
  {
    if($v > $granica)
    {
      $brojIsplativih++;
    }
    $brojLetova++;
  }
  $brojLetova = $brojLetova/2;
  $isplativ = false;
  if($brojLetova < $brojIsplativih)
  {
    $isplativ = true;
  }
  return $isplativ;
}

$isplativNis = isplativ($letovi,200);
if($isplativNis)
{
  echo "<p>Dan je bio isplativ</p>";
}
else
{
  echo "<p>Dan nije bio isplativ</p>";
}

// Zadatak 6
function alarmantan($a,$granica)
{
  $brojAlramantih = 0;
  foreach($a as $v)
  {
    if($v < $granica)
    {
      $brojAlramantih++;
    }
  }
  $value = false;
  if($brojAlramantih > 0)
  {
    $value = true;
  }
  return $value;
}

$alarmantanNis = alarmantan($letovi,150);
if($alarmantanNis)
{
  echo "<p>Dan je alarmantan</p>";
}
else
{
  echo "<p>Dan nije alrmantan</p>";
}

// Zadatak 7

function dobreDestinacije($a)
{
  $prosekNis = prosek($a);
  foreach($a as $let => $v)
  {
    if($v > $prosekNis)
    {
      echo "<p>Let za " . $let . " je natprosecan sa $v putnka</p>";
    }
  }
}

dobreDestinacije($letovi);

// Zadatak 2

$letovi = array(
  ["dest"=>"Milano","country"=>"Italija","time"=>"11:00"],
  ["dest"=>"Milano","country"=>"Italija","time"=>"10':00"],
  ["dest"=>"Berlin","country"=>"Nemacka","time"=>"12:00"],
  ["dest"=>"Amsterdam","country"=>"Belgija","time"=>"11:00"],
  ["dest"=>"Beograd","country"=>"Srbija","time"=>"16:20"]
);

function brojLetovaZaZemlju($letovi, $zemlja)
{
  $br=0;
  foreach($letovi as $let => $k)
  {   
      if($k["country"]===$zemlja)
      {
       
        $br++;
      }
  }
  return $br;
}

$brojLetovaZaZemlju= brojLetovaZaZemlju($letovi,"Srbija");
echo "<p>$brojLetovaZaZemlju</p>";

// Zadatak 10;
function visePrePodne($letovi)
{ 
  $brP=0;
  $brPP=0;
  $value = false;
  $myTime = '12:00';
  $timeH = (int) substr($myTime, 0, 2);
  //$timeM = (int) substr($myTime, 3, 5);
  foreach($letovi as $let => $k)
  {   
   if($timeH < (int) substr($k["time"], 0, 2))
   {
    $brP++;
   }
   else
   $brPP++;
  }
  if($brPP>$brP)
  {
    $value =true;
  }
  return $value;
}

if(visePrePodne($letovi))
{
  echo "<p>Vise letova prepodne</p>";
}
else
{
  echo "<p>Vise letova popodne</p>";
}


// Zadatak 11 

function ispisLetovaDoSad($letovi)
{
  $timeHC = date('H');
  $timeHC = (int) substr($timeHC, 0, 2);
  foreach($letovi as $let => $k)
  {
    $timeH =(int) substr($k["time"],0,2);
    if($timeH <= $timeHC)
    {
      echo "<p> Do $timeHC poleteo je let za : ". $k["dest"] ."</p>";
    }
  }
}

ispisLetovaDoSad($letovi);

// Zadatak 12
$crvena = ["Srbija","Italija"];
function rizicniLetov($letovi, $crvenaZona)
{
  foreach($letovi as $let => $k)
  {
    for($i=0;$i<count($crvenaZona);$i++)
    {
      if($k["country"]==$crvenaZona[$i])
      {
        echo "<p style='color: red;' > Let za:". $k['dest']. ",".  $k['country'] . " u " . $k['time'] . " je u crvenoj zoni</p>";
      }
    }
  }
}
// "Beograd" => ["dest"=>"Milano","country"=>"Italija","time"=>"11:00"],


rizicniLetov($letovi, $crvena);

// Zadatak 13 : 

/* function trazeneDestinacije($letovi)
{ 

  foreach($letovi as $let => $k)
  {
   $matches = array_filter() 
  }
}
*/

// Zadatak Treci Deo:

$dan = array(
  "datum" => "2023/05/16",
  "kisa" => true,
  "sunce" => true,
  "oblacno" => false,
  "temperatura" => [5, 10, 13, 17, 12, 9, 6]
);

// Zadatak 15:
function prosecnaTemp($dan)
{
  $temperatura = $dan["temperatura"];
  $suma = 0;
  foreach($temperatura as $temp)
  {
    $suma+=$temp;
  }
  $prosek = $suma/count($temperatura);
  return $prosek;
}

echo "prosecna temperatura za dan " . $dan["datum"] . " je: " . prosecnaTemp($dan);

// Zadatak 16 :

function brojNatprosecnoMerenje($dan)
{
  $prosecnaTemperatura = prosecnaTemp($dan);
  $broj = 0;
  $temperature = $dan["temperatura"];
  foreach($temperature as $temp)
  {
    if($temp > $prosecnaTemperatura)
    {
      $broj++;
    }
  }
  return $broj;
}

echo "<br> Broj merenja sa natprosecnom temperaturom za dan " . $dan["datum"] . " je " . brojNatprosecnoMerenje($dan);

// Zadatak 17
function brojMaxMerenja($dan)
{
  $max = 0;
  $br = 0;
  $temperatura = $dan["temperatura"];
  foreach($temperatura as $temp)
  {
    if($temp > $max)
    {
      $max = $temp;
    }
  }
 
  foreach($temperatura as $temp)
  {
    if($temp == $max)
    {

      $br++;
    }
  }
  return $br;
}

$maxBroj = brojMaxMerenja($dan);
echo "<p>Broj makisamlnih temperatura je $maxBroj</p>";
// Zadatak 18


function brojMerenjaIzmedju($dan, $temp1, $temp2)
{
  $temperature = $dan["temperatura"];
  $br=0;
  foreach($temperature as $temp)
  {
    if($temp1 < $temp && $temp < $temp2)
    {
      $br++;
    }
  }
  return $br;
}

$v1 = 7;
$v2 = 15;
echo "<br> Broj merenja na dan " .  $dan["datum"] . " Izmedju vrednosti $v1 i $v2 jednak je: " . 
brojMerenjaIzmedju($dan, 5, 19);


// Zadatak 19:

function natrposecnoTopao($dan)
{
  $br =0;
  $sum = 0;
  $temperatura = $dan["temperatura"];
  foreach($temperatura as $temp)
  {
    $sum+=$temp;
  }
  $avrage = $sum / count($temperatura);
  foreach($temperatura as $temp)
  {
    if($avrage < $temp)
    {
      $br++;
    }
  }
  
  if($br > count($temperatura))
  {
    return true;
  }
  else
  {
    return false;
  }
}

if(natrposecnoTopao($dan))
{
  echo "<p>Dan je natrposecno topao</p>";
}
else
{
  echo "<p>Dan nije natprosecno topao</p>";
}

// Zadatak 20

function leden($dan)
{
  $temperatura = $dan["temperatura"];
  foreach($temperatura as $temp)
  {
    if($temp < 0)
    {
      return true;
      break;
    }
    else
    {
      return false;
    }
  }
}

if(leden($dan))
{
  echo "<p>Dan je leden</p>";
}
else
{
  echo "<p>Dan nije leden</p>";
}

// Zadatak 21: 


$dan = array(
  "datum" => "2023/05/16",
  "kisa" => true,
  "sunce" => true,
  "oblacno" => false,
  "temperatura" => [5, 10, 13, 17, 12, 9, 6]
);

function tropski($dan)
{
  $temperatura = $dan["temperatura"];
  $result = true;
  foreach($temperatura as $temp)
  {
    if($temp < 24)
    {
      $result = false;
      break;
    }
    
  }
  return $result;
}

if(tropski($dan))
{
  echo "<p>Dan je tropski</p>";
}
else
{
  echo "<p>Dan nije tropski</p>";
}

// Zadatak 22

function nepovaljn($dan)
{
  $temperatura = $dan["temperatura"];
  for($i=0;$i<count($temperatura)-1;$i++)
  {
    if($temperatura[$i] > $temperatura[$i+1])
    {
      $razlika = $temperatura[$i] - $temperatura[$i+1];
      if($razlika > 8)
      {
      }
      else
      {
        return true;
      }
    }
    else
    {
      $razlika = $temperatura[$i+1] - $temperatura[$i];
      if($razlika > 8)
      {
        
      }
      else
      {
        return true;
      }
    }
  }
  return false;  
}

if(nepovaljn($dan))
{
  echo "<p>Dan je povoljan</p>";
}
else
{
  echo "<p>Dan je nepovoljan</p>";
}

// Zadatak 23:

$dan = array(
  "datum" => "2023/05/16",
  "kisa" => true,
  "sunce" => true,
  "oblacno" => true,
  "temperatura" => [5, 10, 13, 17, 12, 9, 6]
);


function neuobicajen($dan)
{
  $temperatura = $dan["temperatura"];
  foreach($temperatura as $temp)
  {
    if(($dan["kisa"] && $temp < -5) || ($dan["oblacno"]  && $temp > 25) || ($dan["kisa"] && $dan["sunce"] && $dan["oblacno"]))
    {
      return true;
      break;
    }
    else
    {
      return false;
    }
  }
}

if(neuobicajen($dan))
{
  echo "<p>Dan je bio neuobicajen</p>";
}
else
{
  echo "<p>Dan nije bio neuobicajen</p>";
}