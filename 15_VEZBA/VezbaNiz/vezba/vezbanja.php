<?php

require_once "film.php";
require_once "NemiFilm.php";

$f1 = new Film("Lord of the Rings", 2001, "Peter Jackson", [7,5,8.7,10]);
$f1->stampaj();

$f2 = new Film("Kill Bill", 2003, "Quentin Tarentino", [7,3,4.7,9]);
$f2->stampaj();

$f3 = new Film("Titanic", 1999, "James Cameron", [2,1,3.7,9]);
$f3->stampaj();


$filmovi = [$f1, $f2, $f3];

$filmovi = [$f1,$f2,$f3];
foreach ($filmovi as $film)
{
  $film->stampaj();
}

function prosecnaOcena($films)
{
  $zbir = 0;
  foreach($films as $f)
  {
    $zbir += $f->prosek();
  }
  $n= count($films);
  if($n >0)
  {
    return $zbir / $n;
  }
  else
  {
    return 0;
  }

  // return ($n>0) ? ($zbir / $n) : 0;
}

$prosecna = round(prosecnaOcena($filmovi),2);
echo "<p>Prosecna ocena svih filmova jednaka je $prosecna</p>";

function vekFilmova($films,$vek)
{
  foreach($films as $film)
  {
    $godinaIzdanja = $film->getGodinaIzdanja();
    $vekIzdanja = ceil($godinaIzdanja/100);
    if($vekIzdanja == $vek)
    {
      $film->stampaj();
    }
  }
}

echo "<p>Filmovi koji su izasli u 21. veku</p>";
vekFilmova($filmovi, 21);

function oserdnjiFilm($niz)
{
  $prosek = prosecnaOcena($niz);
  $najblizaVrednost = abs($niz[0]->prosek() - $prosek);
  $najbliziFilm = $niz[0];
  foreach($niz as $film)
  {
    $vrednost = abs($film->prosek()-$prosek);
    if($vrednost < $najblizaVrednost)
    {
      $najblizaVrednost = $vrednost;
      $najbliziFilm = $film;
    }
  }
  return $najbliziFilm;

}

$osf = oserdnjiFilm($filmovi);
echo "<p>Film najblizi prosecnoj vrednosti je </p>";
$osf->stampaj();
echo "<hr>";

function najboljeOcenjeni($films)
{
  $maxOcena = $films[0]->prosek();
  $filmOcenaMax = $films[0];
  foreach($films as $film)
  {
    $vrednost = $film->prosek();
    if($vrednost > $maxOcena)
    {
      $maxOcena = $vrednost;
      $filmOcenaMax = $film;
      
    }
  }
  return $filmOcenaMax;
}

$najboljIFilm = najboljeOcenjeni($filmovi);
echo "<p>Film sa najvecom ocenom je : </p>";
$najboljIFilm->stampaj();
echo "<hr>";

function najmanjaOcenaNajboljeg($niz)
{
  $najboljIFilm = najboljeOcenjeni($niz);
  $sveOcene = $najboljIFilm->getOcene();
  $minOcena = $sveOcene[0];
  foreach($sveOcene as $ocena)
  {
      if($ocena < $minOcena)
      {
        $minOcena = $ocena;
      }

  }
  return $minOcena;
}

$minOcena = najmanjaOcenaNajboljeg($filmovi);
echo "<p>Najmanja ocena najbolje ocenjog filma je  : $minOcena </p>";
echo "<hr>";


function najmanjaOcena($niz)
{
  $OcenePrvogFilma = $niz[0]->getOcene();
  $minOcena = $OcenePrvogFilma[0];
  foreach ($niz as $film)
  {
    
    $ocene = $film->getOcene();
    foreach($ocene as $o)
    {
      if($o < $minOcena)
      {
        $minOcena = $o;
      }
    }
  }
  return $minOcena;
}

$mo = najmanjaOcena($filmovi);
echo "<p>namanja ocena koj je neki film dobio je: $mo</p>";
echo "<hr>";

// proci kroz sve filmove cija je ocena veca od prosecne  i vratiti niz


function iznadOcene($niz, $ocena)
{
  $filmoviIznad =[];
  foreach($niz as $film)
  {

    if($ocena < $film->prosek())
    {
      $filmoviIznad[]=$film;
    }
  }

  return $filmoviIznad;
}

print_r(iznadOcene($filmovi, 7));
echo "<hr>";