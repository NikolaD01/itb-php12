<?php

class Film
{
  var $naslov;
  var $reziser;
  var $godinaIzdanja;
  function stampaj()
  {
   
     echo
     "
      <table>
        <tr>
          <td>Naslov filma:</td>
          <td>$this->naslov</td>
        </tr>
        <tr>
          <td>Reziser filma:</td>
          <td>$this->reziser</td>
        </tr>
        <tr>
          <td>Godina izrade filma:</td>
          <td>$this->godinaIzdanja</td>
        </tr>
      </table>
      <hr>
     ";
     
 
    }
}

$f1 = new Film();
$f1->naslov = "Fault is in our stars";
$f1->reziser = "Reziser 1";
$f1->godinaIzdanja = 2005;
$f1->stampaj();

$f2 = new Film();
$f2->naslov = "Man with name Otto";
$f2->reziser = "Reziser 2";
$f2->godinaIzdanja = 2023;
$f2->stampaj();

$f3 = new Film();
$f3->naslov = "Shining";
$f3->reziser = "Reziser 3";
$f3->godinaIzdanja = 2003;
$f3->stampaj();