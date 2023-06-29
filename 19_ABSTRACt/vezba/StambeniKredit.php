<?php

require_once "Kredit.php";

class StambeniKredit extends Kredit
{ 

 

  public function mesecnaRataKredita()
  {
    $mesecnaKamata = $this->godisnjaKamata * 12 / 100;
    $stepen = pow(1+ $mesecnaKamata, $this->brojGodina * 12);
    $mesecnaRata = ($this->osnovica * $mesecnaKamata * $stepen) / ($stepen -1);
    return $mesecnaRata; 
  }
}