<?php

require_once "osoba.php";

class Zaposleni extends Osoba
{
  protected $plata;
  protected $pozicija;

  public function getPlata()
  {
    return $this->plata;
  }

  public function setPlata($pl)
  {
    $this->plata = $pl;
  }

  public function getPozicija()
  {
    return $this->pozicija;
  }

  public function setPozicija($po)
  {
    $this->pozicija = $po;
  }

  public function __construct($i, $p, $gr, $pl, $po)
  {
    parent::__construct($i,$p,$gr);
    $this->setPlata($pl);
    $this->setPozicija($po);
  }

  public function ispisZaposleni()
  {
    echo "<p> Osoba :". $this->getIme() ." "
      . $this->getPrezime() . " , rodjena : "
      . $this->getGodinaRodjenja() . " pozicija i plata". $this->getPlata().
      " ". $this->getPozicija()."</p>";
  }

}