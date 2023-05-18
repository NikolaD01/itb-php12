<?php
  $a = 1;
  $b = 0;

  if ($a == $b)
  {
    echo "<p>$a je jednako $b</p>";
  }

  if ($a != $b)
  {
    echo "<p>$a je razlicito od $b</p>";
  }

  if ($a <= $b) {
    echo "<p>$a je manje od $b</p>";
  }

  if ($a >= $b) {
    echo "<p>$a je vece od $b</p>";
  }

  $br1 = 3;
  $br2 = 3;

  if ($br1 == $br2)
  {
    echo "<p>$br1 jednako je po vrednosti sa $br2</p>";

  }
  echo "<br>";
  if ($br1 === $br2) 
  {
    echo "<p>$br1 jednako je po vrednosti  i tipu sa $br2</p>";
  }


  echo "<br>";
  echo "<p>Nastavljam dalje</p>";


 // IF - ELSE

  $a = 5;
  $b = 5;

  if ($a > $b) 
  {
    echo "$a je vece od $b";
  } else
  {
    echo "$a je manje ili jednako  od $b";
  }

  echo "Nastavljamo pono dalje";








  ?>