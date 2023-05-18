<?php

$n = 10;
$i = 1;
$arr = array(0,1,2,3,4,5,6,7,8,9,"A", "B", "C", "D", "E", "F");
while ($i <= $n)
{
  $c1 = $arr[rand(0,15)];
  $c2 = $arr[rand(0,15)];
  $c3 = $arr[rand(0,15)];
  $c4 = $arr[rand(0,15)];
  $c5 = $arr[rand(0,15)];
  $c6 = $arr[rand(0,15)];

  $color = "#{$c1}{$c2}{$c3}{$c4}{$c5}{$c6}";
  echo "<p style='color:$color;'>Text</p>";
  $i++;
}