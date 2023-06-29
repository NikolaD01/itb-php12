<?php

require_once "Kredit.php";

class AutoKredit extends Kredit
{
  private $autoKamata;

  public function __construct($o, $gk, $bg, $ak)
  {

    parent::__construct(Kredit::AUTO, $o, $gk, $bg);
    $this->setAutoKamata($ak);
  }

  public function mesecnaRataKredita()
  {
    $kamata = $this->osnovica * $this->brojGodina * ($this->godisnjaKamata + $this->autoKamata)/100;
    $ukupanIznos = $this->osnovica + $kamata;
    $mesecnaRata = $ukupanIznos / ($this->brojGodina * 12);
    return $mesecnaRata; 
  }

  public function ispis()
  {
    echo "<p>Auto kredit : osnovica, godisnja Kamata, broj godina otpalte, kamata za auto ". $this->osnovica . ", " . $this->godisnjaKamata . ", ". $this->brojGodina. ", " . $this->autoKamata ."</p>";
  }


  public function getAutoKamata()
  {
    return $this->autoKamata;
  }

  public function setAutoKamata($ak)
  {
    if($ak > 0)
    {
      $this->autoKamata = $ak;
    }
    else
    {
      $this->autoKamata = 0;
    }
  }
}