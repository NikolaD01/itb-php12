<?php

// APSTRAKTNA klasa  je klasa koja sadrzi Barem jednu apstraktnu metodu

abstract class Oblik
{
  private $nazivOblika;

  const TROUGAO = "Trougao";
  const PRAVOUGAONIK = "Pravougaonik";
  const KVADRAT = "Kvadrat";
  const ROMB = "Romb";

  public function __construct($n)
  {
    $this->nazivOblika = $n;
  }

  public abstract function obim();
  // ako neka kalasa sadrzi apstraktnu metodu to znaci:
  // nema implementacija te metode u toj klasi
  // izede klase moraju da ponude implementaciju te metode

  public abstract function povrsina();

  public function ispis()
  {
    echo "<p> $this->nazivOblika: ". $this->obim(). ", ". $this->povrsina() ."</p>";
  }

}