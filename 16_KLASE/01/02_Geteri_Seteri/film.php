<?php

class Film
{
  private $naslov;
  private $reziser;
  private $godinaIzdanja;

  // Geter
  public function getNaslov()
  {
    return $this->naslov;
  }
  public function getReziser()
  {
    return $this->reziser;
  }
  public function getGodinaIzdanja()
  {
    return $this->godinaIzdanja;
  }

  // Seteri

  public function setNaslov($n)
  {
    $this->naslov = $n;
  }
  public function setReziser($r)
  {
    $this->reziser = $r;
  }
  public function setGodinaIzdanja($gi)
  {
    if($gi > 1800)
    {
      $this->godinaIzdanja = $gi;
    }
    else
    {
      $this->godinaIzdanja = 1800;
    }
  }

  // Constructor

  public function __construct($n,$r,$gi)
  {
    $this->setNaslov($n);
    $this->setReziser($r);
    $this->setGodinaIzdanja($gi);
  }

  // metode

  public function stampaj()
  {
   
     echo
     "
      <table>
        <tr>
          <td>Naslov filma:</td>
          <td>$this->naslov</td>
        </tr>
        <tr>
          <td>Reziser filma:</td>
          <td>$this->reziser</td>
        </tr>
        <tr>
          <td>Godina izrade filma:</td>
          <td>$this->godinaIzdanja</td>
        </tr>
      </table>
      <hr>
     ";
     
 
    }
}

$f1 = new Film("Titanik","Reziser1",1901);
$f1->stampaj();
