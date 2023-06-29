<?php

class Kvadrat extends Oblik
{
  private $a;

  public function getA()
  {
    return $this->a;
  }

  public function setA($a)
  {
    if($a>0)
    {
      $this->a = $a;
    }
    else
    {
      $this->a = 0;
    }
  }

  public function __construct($a)
  {
 
      $this->setA($a);
  }

  public function obimKvadrata()
  {
    $o = $this->getA()*4;
    return $o;
  } 

  public function povrsinaKvadrata()
  {
    $p = $this->getA()**2;
    return $p;
  }
}