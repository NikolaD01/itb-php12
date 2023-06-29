<?php

class Pacijent
{
  var $ime;
  var $visina;
  var $tezina;

  function stampaj()
  {
    $bmi = $this->bmi();
    $bmi = number_format($bmi,2,",",".");
    echo 
    "
    <table>
      <tr>
        <td>Ime pacijanta</td>
        <td>$this->ime</td>
      </tr>
      <tr>
        <td>Visina pacijanta</td>
        <td>$this->visina m</td>
      </tr>
      <tr>
        <td>Tezina pacijanta</td>
        <td>$this->tezina kg</td>
      </tr>
      <tr>
        <td>Bmi pacijenta</td>
        <td>$bmi</td>
      </tr>
    </table>
    <hr>
    ";
    }

  function bmi()
  {
    $weight = $this->tezina;
    $height = $this->visina;
    $bmi = $weight/$height**2;
    return $bmi;
  }

  function kritican()
  {
    
    $bmi = $this->bmi();
    if($bmi < 15 || $bmi > 40)
    {
      return true;
    }
    else
    {
      return false;
    }
  }
}

$p1 = new Pacijent();
$p1->ime="Nikola";
$p1->visina=1.94;
$p1->tezina=87;

$p1->stampaj();
if($p1->kritican())
{
  echo "<p>Pacijent je kritican</p>";
}
else
{
  echo "<p>Pacijent nije kritican</p>";
}

$p2 = new Pacijent();
$p2->ime="Dragan";
$p2->visina=1.78;
$p2->tezina=72;

$p2->stampaj();
if($p2->kritican())
{
  echo "<p>Pacijent je kritican</p>";
}
else
{
  echo "<p>Pacijent nije kritican</p>";
}


$p3 = new Pacijent();
$p3->ime="Andrea";
$p3->visina=1.65;
$p3->tezina=62;

$p3->stampaj();
if($p3->kritican())
{
  echo "<p>Pacijent je kritican</p>";
}
else
{
  echo "<p>Pacijent nije kritican</p>";
}

