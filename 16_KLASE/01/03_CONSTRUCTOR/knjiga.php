<?php

class Knjiga
{
  private $naslov;
  private $autor;
  private $godIzdanja;
  private $brojStrana;
  private $cena;


  // Konstruktor

  public function __construct($n,$a,$gi,$bs,$c)
  {
    $this->setNaslov($n);
    $this->setAutor($a);
    $this->setGodIzdanja($gi);
    $this->setBrojStrana($bs);
    $this->setCena($c);
  }

  // Get
  public function getNaslov()
  {
    return $this->naslov;
  }
  public function getAutor()
  {
    return $this->autor;
  }
  public function getGodIzdanja()
  {
    return $this->godIzdanja;
  }
  public function getBrojStrana()
  {
    return $this->brojStrana;
  }
  public function getCena()
  {
    return $this->cena;
  }

  // SETERI

  public function setNaslov($n)
  {
    $this->naslov=$n;
  }
  public function setAutor($a)
  {
    $this->autor=$a;
  }
  public function setGodIzdanja($gi)
  {
    $this->godIzdanja=$gi;
  }
  public function setBrojStrana($bs)
  {
    if($bs > 0)
    {
      $this->brojStrana=$bs;
    }
    else
    {
      $this->brojStrana="<p style='color:red;'>NIJE UNET VALIDAN PODATAK</p>";
    }
  }
  public function setCena($c)
  {
    
    if($c > 0)
    {
      $this->cena=$c;
    }
    else
    {
      $this->cena="<p style='color:red;'>NIJE UNET VALIDAN PODATAK</p>";
    }
  }

  // Metode

  public function ispis()
  {
    echo
    "
    <table>
      <tr>
        <td>Naslov</td>
        <td>".$this->getNaslov()."</td>
      </tr>
      <tr>
        <td>Autor</td>
        <td>". $this->getAutor()."</td>
      </tr>
      <tr>
        <td>Godina Izdanja</td>
        <td>".$this->getGodIzdanja()."</td>
      </tr>
      <tr>
        <td>Broj Strana</td>
        <td>".$this->getBrojStrana()."</td>
      </tr>
      <tr>
        <td>Cena</td>
        <td>".$this->getCena()."</td>
      </tr>
    </table>
    ";
  }

  public function  obimna()
  {
    if($this->getBrojStrana() > 600)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  public function skupa()
  {
    if($this->getCena() > 8000)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  public function dugackoime()
  {
    if(strlen(str_replace(" ","",$this->getAutor())) > 18)
    {
      return true;
    }
    else
    {
      return false;
    }
  }
}


// public function __construct($n,$a,$gi,$bs,$c)

$k1 = new Knjiga("The Gods of Pegana","Edward John Moreton Drax Plunkett",1905,	94,8001);
$k1->ispis();

if($k1->dugackoime())
{
  echo "<p>Autor ima duagcko ime :". $k1->getAutor() . "sa ". strlen(str_replace(" ","",$k1->getAutor())) ." karaktera</p> ";
}
else
{
  echo "<p>Autor nema duagcko ime :". $k1->getAutor() . "sa ". strlen(str_replace(" ","",$k1->getAutor())) ." karaktera</p> ";;
}


if($k1->skupa())
{
  echo "<p>Knjiga je skupa</p>";
}
else
{
  echo "<p>Knjiga nije skupa</p>";
}


if($k1->obimna())
{
  echo "<p>Knjiga je obimna sa ".$k1->getBrojStrana() ." strana </p>";
}
else
{
  echo "<p>Knjiga nije obimna sa ".$k1->getBrojStrana() ." strana </p>";
}