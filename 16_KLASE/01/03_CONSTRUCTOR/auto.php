<?php

class Auto
{
  //Polja
  private $marka;
  private $boja;
  private $imaKrov;

  // metode

   // Constructor 
  public function __construct($m,$b,$ik)
  {
    $this->setMarka($m);
    $this->setBoja($b);
    $this->setImaKrov($ik);
  }

  // geteri: vracju vrednosti polja

  public function getMarka()
  {
    return $this->marka;
  }
  public function getBoja()
  {
    return $this->boja;
  }
  public function getImaKrov()
  {
    return $this->imaKrov;
  }


  // SETERI: postavljaju vrednosti polje

  public function setMarka($m)
  {
    if($m != "")
    {
      $this->marka = $m;
    }
    else
    {
      $this->marka = "Fiat";
    }
  }
  public function setBoja($b)
  {
    $this->boja = $b;
  }
  public function setImaKrov($ik)
  {
    if($ik === true || $ik === false)
    {
      $this->imaKrov = $ik;
    }
    else
    {
      $this->imaKrov = false;
    }
    
  }

 
 

  public function sviraj()
  {
    echo "<p>Beep! Beep!</p>";
  }

  public function ispis()
  {
    $this->sviraj();
    echo "<p>Auto marke ". $this->marka . " ,boje ". $this->boja ;
      if($this->imaKrov)
      {
        echo " ima  krov</p>";
      }
      else
      {
        echo " nema krov</p";
      }
  }
}

$marke = ["Opel","Citoren","BMW"];
$

/* if("Da li je posalta forma")
{
  $marka = "sakupi polje marke sa forme";
  $boja = "sakupi polje boje sa forme";
  $imaKrov = "sakupi polje boje sa forme";
  
  $a = new Auto($marka, boja, $imaKrov);
}*/

$a1 = new Auto("BMW","plava",false);

$a1->ispis();