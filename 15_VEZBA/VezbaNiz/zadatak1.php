<?php

// ZADATAK JEDAN:

// Z1

$student = [7,8,9,6,7,7,7,8,8,10,10,9];

// Z2

function prosecnaOcena($student)
{
   $oceneUkupno = $student[0];
   for($i=1;$i<count($student);$i++)
   {
    $oceneUkupno+=$student[$i];
   }
   $prosek = $oceneUkupno/count($student);
   return round($prosek, 1);

}


echo "<p>Prosecna ocena studenta je :".prosecnaOcena($student)  . "</p>";

// Z3

function brojMaxOcena($student)
{
  $maxOcena = 0;
  for($i=0;$i<count($student);$i++)
  {
    if($maxOcena < $student[$i])
    {
      $maxOcena = $student[$i];
    }
  }
  $br=0;
  for($i=0;$i<count($student);$i++)
  {
    if($maxOcena === $student[$i])
    {
      $br++;
    }
  }

  return $br;
}

echo "<p>Student je maximalnu ocenu dobio :" .brojMaxOcena($student) . "</p>";

// Z5

$studentOdlican = [10,10,10,7,10,10,10,10,10,9,9,9,9,9,10];

function kandidatGeneracije($student)
{
  // treba da proverimo da li je student imao manju ocenu od 9
  // treba da proverimo da li broj 9 i 10 i da ih uporeidmo
  $br9=0;
  $br10=0;
  for($i=0;$i<count($student);$i++)
  {
    if($student[$i]<9)
    {
      return false;
    }
    else
    {
      if($student[$i] == 10)
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


if(kandidatGeneracije($studentOdlican))
{
  echo "<p>Student je kandidat za studenta Generacije</p>";
}
else
{
  echo "<p>Student nije kandidat za studenta Generacije</p>";
}

// Z6

function brojNizaKonstanihOcena($student)
{
  // Prvo nadjemo maksimalnu ocenu
  // onda napravimo niz gde cemo stavljati max ocene
  // ako naidjemo na manje od max brojac max ocene resetejumo.
  $maxOcena = 0;
  $maxOcenaNiz=[];
  $br=0;
  for($i=0;$i<count($student);$i++)
  {
    if($maxOcena < $student[$i])
    {
      $maxOcena = $student[$i];
    }
  }

  for($i=0;$i<count($student);$i++)
  {
    if($student[$i]==$maxOcena)
    {
      $maxOcenaNiz[$br]=$student[$i];
      $br++;
    }
    else
    {
      $br=0;
    }
  }

  return count($maxOcenaNiz);
}

echo "<p>Broj max ocena u nizu je : ".brojNizaKonstanihOcena($student) ."</p>";