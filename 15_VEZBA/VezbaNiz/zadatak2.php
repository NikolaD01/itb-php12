<?php

// Zadatak Dva
// Z7
$student =
[
  ["nazivIspita" =>"Mehanika 1", "datumPolaganja"=>"2020/03/20","ocena"=>7],
  ["nazivIspita" =>"Mehanika 2","datumPolaganja"=>"2022/06/25","ocena"=>9],
  ["nazivIspita" =>"Matematika 1","datumPolaganja"=>"2021/02/10","ocena"=>8],
  ["nazivIspita" =>"Matematika 2" ,"datumPolaganja"=>"2022/06/20","ocena"=>6],
  ["nazivIspita" =>"Informatika","datumPolaganja"=>"2020/1/29","ocena"=>10],
  ["nazivIspita" =>"Inzinjerske i graficke informacije","datumPolaganja"=>"2022/1/29","ocena"=>10]
];


// Z3 

function maxOcena($student)
{
  $maxOcena=0;
  foreach($student as $predmet)
  {
    if($maxOcena < $predmet["ocena"])
    {
      $maxOcena = $predmet["ocena"];
    }
  }
  return $maxOcena;
}

echo "<p>Maksimalnu ocenu koju je student imao je : ". maxOcena($student) ."</p>";

// Z5
function kandidatGeneracije($student)
{
  // treba da proverimo da li je student imao manju ocenu od 9
  // treba da proverimo da li broj 9 i 10 i da ih uporeidmo
  $br9=0;
  $br10=0;
  foreach($student as $predmet)
  {
    if($predmet["ocena"]<9)
    {
      return false;
    }
    else
    {
      if($predmet["ocena"] == 10)
      {
        $br10++;
      }
      else
      {
        $br9++;
      }
    }
  }

  if($br10>=$br9)
  {
    return true;
  }
  else
  {
    return false;
  }
}


if(kandidatGeneracije($student))
{
  echo "<p>Student je kandidat za studenta Generacije</p>";
}
else
{
  echo "<p>Student nije kandidat za studenta Generacije</p>";
}
//Z8
function polezeniGodine($predmeti,$godina)
{
  foreach($predmeti as $predmet )
  {
    if(str_contains($predmet["datumPolaganja"],"$godina"))
    {
      echo "<p>Student je $godina godine polagao ".$predmet["nazivIspita"] ." </p>";
    }
  }

}

polezeniGodine($student,2022);

//Z9
function prosecnaOcenaGodine($predmeti,$godina)
{
  $prosecnaOcena=0;
  $br=0;
  foreach($predmeti as $predmet)
  {
    if(str_contains($predmet["datumPolaganja"],"$godina"))
    {
      $prosecnaOcena+=$predmet["ocena"];
      $br++;
    }
  }
  
  if($prosecnaOcena>0)
  {
    return round($prosecnaOcena = $prosecnaOcena/$br,1);
  }
  else
  {
    return 0; 
  }
  
}

echo "<p>prosecna ocena je " .prosecnaOcenaGodine($student,2022). "</p>";


// Z 10;
function maxOcenaPredmeti($predmeti)
{
  $maxOcenaNiz=[];
  $maxPredmetNiz=[];
  $maxOcena=0;
  foreach($predmeti as $predmet)
  {
    if($maxOcena<$predmet["ocena"])
    {
      $maxOcena=$predmet["ocena"];
    }
  }

  $br=0;
  foreach($predmeti as $predmet)
  {
    if($maxOcena === $predmet["ocena"])
    {
      $maxPredmetNiz[$br]=$predmet["nazivIspita"];
      $maxOcenaNiz[$br]=time()-strtotime($predmet["datumPolaganja"]);
      $br++;
    }
  }

  // (Array ( [0] => Predemt1 [1] => Predmet2 )
  // (Array ( [0] => 104613370 [1] => 41454970 )
  $vreme=$maxOcenaNiz[0];
  $najskoriji = "";
  for($i=0;$i<count($maxOcenaNiz);$i++)
  {
    if($vreme>$maxOcenaNiz[$i])
    {
      $najskoriji=$maxPredmetNiz[$i];
      
    }
  }

  return $najskoriji;
}



echo "<p>Najskoriji predmet koji je student polozio sa najvisom ocenom je : ".maxOcenaPredmeti($student)."</p>";


// Z11

/*
Napisati funkciju kojoj se prosleđuje i neki string kao dodatni parametar, kao i dva cela broja,
 a koja vraća broj ispita koje je student položio, a čiji naziv predmeta sadrži dati string, 
kao i da se ocena nalazi između zadata dva broja. (samostalna vežba)
*/
function sadrzi($student, $string,$n1,$n2)
{
  $br=0;
  $pom = 0;
  if($n1>$n2)
  {
    $pom = $n1;
    $n1 = $n2;
    $n2 = $pom;
  }
  foreach($student as $k)
  {
    if(strpos($k["nazivIspita"], $string) !== false && $n1<=$k["ocena"] && $n2>=$k["ocena"])
    {
      $br++;
    }
  }

  return $br;
}
$string = "Mehanika";

echo "<p>".sadrzi($student, $string,10,6)."</p>";

