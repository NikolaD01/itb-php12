<?php
require_once "Oblik.php";
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
    parent::__construct(Oblik::PRAVOUGAONIK);
    $this->setA($a);
    $this->setB($b);
  }

  public function obim()
  {
    return 2*($this->getA()+$this->getB()); 
  }

  public function povrsina()
  {
    return $this->getA() * $this->getB();
  }

  
}