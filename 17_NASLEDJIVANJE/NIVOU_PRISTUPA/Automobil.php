<?php

require_once "vozilo.php";

class Automobil extends Vozilo
{

  private $brojVrata;

  public function __construct($j, $z, $p, $bv)
  {
    parent::__construct($j, $z, $p);
    $this->brojVrata = $bv;
  }

  public function ispisAuto()
  {
    $this->ispis();
    echo "<p> automobil : ". $this->javnoPolje . " " . $this->zasticenoPolje . "
     " . $this->brojVrata  ."</p>";
     // $this->privatnoPolje privatno polje
   
  }
}