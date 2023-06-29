<?php

require_once "Oblik.php";

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
      parent::__construct(Oblik::KVADRAT);
      $this->setA($a);
  }

  public function obim()
  {
    $o = $this->getA()*4;
    return $o;
  } 

  public function povrsina()
  {
    $p = $this->getA()**2;
    return $p;
  }
}