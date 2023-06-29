<?php

class Vozilo
{
  public $javnoPolje;
  protected $zasticenoPolje;
  private $privatnoPolje;

  public function __construct($j, $z, $p)
  {
    $this->javnoPolje = $j;
    $this->zasticenoPolje = $z;
    $this->privatnoPolje = $p;
  }

  public function ispis()
  {
    echo "<p>". $this->javnoPolje . " " . $this->zasticenoPolje . "
     " . $this->privatnoPolje."</p>";
  }
}