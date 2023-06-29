<?php

class Pacijent
{
  private $ime;
  private $visina;
  private $tezina;

  // GET 
  public function getIme()
  {
    return $this->ime;
  }
  public function getVisina()
  {
    return $this->visina;
  }
  public function getTezina()
  {
    return $this->tezina;
  }

  // SET

  public function setIme($i)
  {
    $this->ime = $i;
  }
  public function setVisina($v)
  {
    if($v < 0)
    {
      $this->visina = 0;
    }
    elseif($v > 250)
    {
      $this->visina = 250;
    }
    else
    {
      $this->visina = $v;
    }
  }
  public function setTezina($t)
  {
    if($t < 0)
    {
      $this->tezina = 0;
    }
    elseif($t > 550)
    {
      $this->tezina = 550;
    }
    else
    {
      $this->tezina = $t;
    }
  }

  // Constructor 
  public function __construct($i,$v,$t)
  {
    $this->setIme($i);
    $this->setVisina($v);
    $this->setTezina($t);
  }

  // Metoda
  
  public function stampaj()
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

  private function bmi()
  {
    $weight = $this->tezina;
    $height = $this->visina;
    $bmi = $weight/$height**2;
    return $bmi;
  }

  public function kritican()
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

$p1 = new Pacijent("Nikola",1.94,87);
$p1->stampaj();