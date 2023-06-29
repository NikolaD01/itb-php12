<?php

class Krug
{
  protected $r;

  const PI = 3.14;
  private static $pi = self::PI;
  private static $brojDecimala = 2;
  private static $brojKrugova = 0;


  public static function getBroJKrugova()
  {
    return self::$brojKrugova;
  }
  
  public static function setPi($vr)
  {
    self::$pi = $vr;
  }

  public function getPi()
  {
    return $this->pi;
  }
  

  public function getR()
  {
    return $this->r;
  }

  public function setR($r)
  {
    if($r >= 0)
    {
      $this->r = $r;
    }
    else
    {
      $this->r = 0;
    }
  }

  public function __construct($r)
  {
    self::$brojKrugova++;
    $this->setR($r);
  }

  public function obimKurga()
  {
    $obim = round(2*$this->getR()*Krug::$pi, self::$brojDecimala);
    return $obim;
  }

  public function povrsinaKruga()
  {
    $povrsina = round(($this->getR()**2)*self::$pi, self::$brojDecimala);
    return $povrsina;
  }

  public static function setBrojDecimala($br)
  {
    self::$brojDecimala = $br;
  }

  public static function getBrojDecimala()
  {
    return self::$brojDecimala;
  }
}
