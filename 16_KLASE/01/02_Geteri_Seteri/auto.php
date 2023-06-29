<?php

class Auto
{
  //Polja
  private $marka;
  private $boja;
  private $imaKrov;

  // metode

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

  // Constructor 
  public function __construct($m,$b,$ik)
  {
    $this->setMarka($m);
    $this->setBoja($b);
    $this->setImaKrov($ik);
  }


  public function sviraj()
  {
    echo "<p>Beep! Beep!</p>";
  }

  public function ispis()
  {
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

// Kada se kreira klasa, obicno se na sledeeci nacin implementira:
// 1) sva polja stavimo da su privatna,
// 2) za svako polje napisemo geter i seter,
//    2.1) geter: dohvata (cita) vrednost polja
//    2.2) seter: postavlja novu vrednost polja

$a1 = new Auto();

// $a->marka = "audi";  // Nije moguce jer polja marka je privatno polje
$a1->setMarka("Audi");
$a1->setImaKrov(true);
if($a1->getImaKrov()=== true)
{
  echo "Automobil marke " . $a1->getMarka(). " ima krov<br>"; 
}
elseif($a1->getImaKrov()=== false)
{
  echo "Automobil marke " . $a1->getMarka(). " nema krov<br>"; 
}
else
{
  echo "Automobil marke " . $a1->getMarka(). " nema validno postavljeno polje za krov<br>"; 

}

// $a1->marka = 158; // Nije moguce polje marka je privatno polje

echo $a1->getMarka(); // Ovo radi: poziva se geter za polje mara, geter vrati vrednost polje
                      // pa onda mi ispisemo tu vrednost

$a1->sviraj();