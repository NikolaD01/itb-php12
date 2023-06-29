<?php

class Auto
{
  //Polja
  var $marka;
  var $boja;
  var $imaKrov;

  // metode
  function sviraj()
  {
    echo "<p>Beep! Beep!</p>";
  }

  function ispis()
  {
    echo "<p>Auto marke ". $this->marka . " ,boje ". $this->boja ;
      if($this->imaKrov)
      {
        " ima  krov</p>";
      }
      else
      {
        echo " nema krov</p";
      }
  }
}
// $this === objekat koji poziva neku metodu.

// mozemo da kreiramo objekte klase Auto
$a1 = new Auto();
//var_dump($a1);
$a1->marka = "Opel";
$a1->boja = "plava";
$a1->imaKrov = false;
// i ako nema varijabllu mozemo dodati
//7 $a1->kubikaza = 1600;
echo "<br>";
//var_dump($a1);  

$a2 = new Auto();
$a2->marka = "Pegueot";
$a2->boja = "bela";
$a2->imaKrov = false;
$a2->sediste = 5;
echo "<br>";
//var_dump($a2);  

$a3 = new Auto();
$a3->marka = "Audi";
$a3->boja= "siva";
$a3->imaKrov=true;
// echo "<p>Auto marke ". $a3->marka . " ,boje ". $a3->boja . "ima  krov: ". $a3->imaKrov ."</p>";
$a3->ispis();
$a2->ispis();

$a1->sviraj();
$a2->sviraj();
$a3->sviraj();

$a2->ispis();
