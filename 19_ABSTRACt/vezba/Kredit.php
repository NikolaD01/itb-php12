<?php

abstract class Kredit
{

  const AUTO = "Auto Kredit";
  const STAMBENI = "Stambeni Kredit";

  protected $naziv;
  protected $osnovica;
  protected $godisnjaKamata;
  protected $brojGodina;
 
  // Konstrukotr

  public function __construct($n,$o, $gk, $bg)
  {
    $this->setNaziv($n);
    $this->setOsnovica($o);
    $this->setGodisnjaKamata($gk);
    $this->setBrojGodina($bg);
  }

  abstract public function mesecnaRataKredita();
 
  public function ispis()
  {
    echo "<p>$this->naziv : osnovica, godisnja Kamata, broj godina otpalte, kamata za auto ". $this->osnovica . ", " . $this->godisnjaKamata . ", ". $this->brojGodina."</p>";
  }





  public function getNaziv()
  {
    return $this->naziv;
  }
  public function getOsnovica()
  {
    return $this->osnovica;
  }
  public function getGodisnjaKamata()
  {
    return $this->godisnjaKamata;
  }
  public function getBrojGodina()
  {
    return $this->brojGodina;
  }
  // seteri
  public function setNaziv($n)
  {
    $this->naziv=$n;
  }
  public function setOsnovica($o)
  {
    if($o > 0)
    { 
      $this->osnovica=$o;
    }
    else
    {
      $this->osnovica=0;
    }
  }
  public function setGodisnjaKamata($gk)
  {
    if($gk > 0)
    {
      $this->godisnjaKamata=$gk;
    }
    else
    {
      $this->godisnjaKamata = 0;
    }
  }
  public function setBrojGodina($bg)
  {
    if($bg > 0)
    {
      $this->brojGodina=$bg;
    }
    else
    {
      $this->brojGodina = 0;
    }
  }

}