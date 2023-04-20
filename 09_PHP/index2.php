<?php
  /* Zadatak 3 */
  $cena = 1400;
  $nov = 2000;
  $kusur = $nov - $cena;
  echo "<hr>";
  echo  "kusru je ". $kusur;
  echo "<hr>";

  $eur =  100;
  $kursEur = 117.5;
  $din = $eur * $kursEur;
  echo "<hr>";
  echo "vrednost u dinarima nakon konverzije: " . $din;
  echo "<hr>";

  /* Zadatak 5 */

  $din = 10000;
  $eur = $din / $kursEur;
  echo "<hr>";
  echo "Vrednost u evrima nakon konverzije: " . $eur;
  echo "<hr>";

  /* Zadatak 6 */

  $eur = 100;
  $kursEurDin = 117.5;
  $kursDolDin = 106.7;
  // $din = $eur * $kursEurDin;
  // $dol = $din / $kursDolDin;
  $dol = $eur * $kursDolDin / $kursDolDin;
  echo "<hr>";
  echo "Vrednost u dolarima nakon konverzije: " . $dol;
  echo "<hr>";

  // Zadarak 7 8 9 za domaci


  /*  Zadatak 10 */
  // 100: cena Bez popusta = (100 - popust ) : $cena
  // $cenaBezPopusta = 100* $cena / (100-$popust)
  $cena = 70;
  $popust = 20;
  $cenaBezPopusta = $cena * 100 / (100 - $popust);
  echo "<hr>";
  echo "Cena bez popusta: " . $cenaBezPopusta;
  echo "<hr>";

  // DRUGI NACIN

  $udeo = (100 - $popust) / 100;
  $cenaBezPopusta = $cena / $udeo;
  echo "<hr>";
  echo "Cena bez popusta: " . $cenaBezPopusta;
  echo "<hr>";

  /* Zadatak 11 */
  // Boc : 3  -> 1 dan , 0 ostatak.
  // Boc : 5  -> 1 dan , 2 ostatak.
  // Boc : 6  -> 2 dan , 0 ostatak 
  // Boc : 7  -> 2 dan , 1 ostatak.
  // Boc : 8  -> 2 dan , 2 ostatak.
  // Boc : 9  -> 3 dan , 0 ostatak. 
  $n = 56; 
  $brojDana = floor(56 / 3) ;  // donji ceo deo od realnog broja (ceil() za gornji ceo broj)
  $brojNeiskorTableta = 56 % 3 ;
  echo "<hr>";
  echo "Broj dana: " . $brojDana;
  echo "<br>";
  echo "Broj neiskoricenih tabelta: " . $brojNeiskorTableta;
  echo "<hr>";
  
  ?>