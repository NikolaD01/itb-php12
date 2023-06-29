<?php

require_once "vozilo.php";

class Automobil extends Vozilo
{
  // klasa automobil nasjledjuje sva polja i metode iz klase vozilo
  public function voziAutomobil()
  {
   echo "<p>Autmobil $this->tip , ($this->boja) u pokretu</p>";
   // echo "<p>Automobil" . $this->getTip() ."(".$this->getBoja() .")u pokretu</p>";
  }

}