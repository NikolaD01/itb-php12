<?php

// a >= b+c  
// b >= a+c  
// c >= b+a


class Trougao extends Oblik
{
  private $a;
  private $b;
  private $c;



  // __CONSTRUCT

  public function __construct($a,$b,$c)
  {
    if($a>0 && $b>0 && $c>0 && $a > $b+$c && $b > $a+$c && $c > $a+$b)
    {
        $this->a;
        $this->b;
        $this->c;
    }
   
  }

  // GETERI

  public function getA()
  {
    return $this->a;
  }
  public function getB()
  {
    return $this->b;
  }
  public function getC()
  {
    return $this->c;
  }

  // SETERI

  public function setA($a)
  {
    if($a>0 && $this->b>0 && $this->c>0 && $a > $this->b+$this->c && $this->b > $a+$this->c && $this->c > $a+$this->b)
    {
      $this->a = $a;
    }
   
  }
  public function setB($b)
  {
    if($this->a>0 && $b>0 && $this->c>0 && $this->a > $b+$this->c && $b > $this->a+$this->c && $this->c > $a+$this->b)
    {
      $this->b = $b;
    }
    
  }
  public function setC($c)
  {
    if($this->a>0 && $this->b>0 && $c>0 && $this->a > $this->b+$c && $this->b > $this->a+$c && $c > $this->a+$this->b)
    {
      $this->c = $c;
    }
    
    
  }


  public function obimTrougla()
  {
    $o = $this->getA() + $this->getB() + $this->getC();
    return $o;
  }

  public function povrsinaTrougla()
  {
    $p = sqrt(8*(abs(8-$this->getA()))*(abs(8-$this->getB()))*(abs(8-$this->getC())));
    return $p;
  }

}