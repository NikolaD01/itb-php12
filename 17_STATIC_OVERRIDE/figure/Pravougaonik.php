<?php

class Pravougaonik extends Oblik
{
  private $a;
  private $b;

  public function getA()
  {
    
    return $this->a;
  }

  public function getB()
  {
    return $this->b;
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

  public function setB($b)
  {
    if($b>0)
    {
      $this->b = $b;
    }
    else
    {
      $this->b = 0;
    }
  }

  public function __construct($a,$b)
  {
    $this->setA($a);
    $this->setB($b);
  }

  public function obimPravougaonik()
  {
    return 2*($this->getA()+$this->getB()); 
  }

  public function povrsinaPravougaonik()
  {
    return $this->getA() * $this->getB();
  }
}