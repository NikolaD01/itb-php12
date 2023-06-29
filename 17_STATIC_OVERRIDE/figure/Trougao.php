<?php


// a >= b+c  
// b >= a+c  
// c >= b+a
require_once "Oblik.php";

class Trougao extends Oblik
{ 
  private $a;
  private $b;
  private $c;

  private  static function uslovZaTrougao($a,$b,$c)
  {
    return ($a>0 && $b>0 && $c>0 && $a > $b+$c && $b > $a+$c && $c > $a+$b);
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

  // __CONSTRUCT

  public function __construct($a,$b,$c)
  {
    if(self::uslovZaTrougao($a,$b,$c))
    {
        $this->a;
        $this->b;
        $this->c;
    }
   
  }

 
  // SETERI

  public function setA($a)
  {
    if(self::uslovZaTrougao($a,$this->$b,$this->$c))
    {
      $this->a = $a;
    }
   
  }
  public function setB($b)
  {
    if(self::uslovZaTrougao($this->$a,$b,$this->$c))
    {
      $this->b = $b;
    }
    
  }
  public function setC($c)
  {
    if(self::uslovZaTrougao($this->$a,$this->$b,$c))
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
      $s = $this->obimTrougla() / 2;
      $p = sqrt($s*($s-$this->a) * ($s-$this->b)  * ($s-$this->c));
      return $p;
  }

}

