<?php

$blogovi =
[
  ["title"=>"Priroda po Kisi","likes"=>54,"dislikes"=>30],
  ["title"=>"Sport!","likes"=>105,"dislikes"=>35],
  ["title"=>"Politika","likes"=>30,"dislikes"=>55],
  ["title"=>"Ljubav","likes"=>115,"dislikes"=>20]
];


// Zadatak 25 :
echo "<hr>";
function ukupanBrojlikova($blogovi)
{
  $sum = 0;
  foreach($blogovi as $blog)
  {
    $sum+=$blog["likes"];
  }
  return $sum;
}

echo "<p>Ukupan broj likova je : ". ukupanBrojlikova($blogovi)." </p>";
// Zadatak 26:
echo "<hr>";
function prosecanBrojlikova($blogovi)
{
  $sum = ukupanBrojlikova($blogovi)/count($blogovi);
  return $sum;
}

echo "<p>Prosecan broj likova je : ". prosecanBrojlikova($blogovi)." </p>";

// Zadatak 27 :
echo "<hr>";
function pozitivanBlog($blogovi)
{
  foreach($blogovi as $blog)
  {
    if($blog["likes"] > $blog["dislikes"])
    {
      echo "<p> Blog sa naslovom , ".$blog["title"]." je pozitivan</p>";
    }
  }
}
pozitivanBlog($blogovi);

// Zadatak 28 :

echo "<hr>";
function pozitivanDuploBlog($blogovi)
{
  foreach($blogovi as $blog)
  {
    if($blog["likes"] >= $blog["dislikes"]*2)
    {
      echo "<p> Blog sa naslovom , ".$blog["title"]." je pozitivan</p>";
    }
  }
}

pozitivanDuploBlog($blogovi);

// Zadatak 29 :
echo "<hr>";
function uzvicanNaslov($blogovi)
{
  foreach($blogovi as $blog)
  {
    if(substr($blog["title"], -1) == "!")
    {
      echo "<p>".$blog["title"] ."</p>";
    }
  }
}

uzvicanNaslov($blogovi);

// Zadataj 30 :
echo "<hr>";
function prekoGraniceBlog($blogovi,$granica)
{
  $br=0;
  foreach($blogovi as $blog)
  {
    if($blog["likes"] > $granica)
    {
      $br++;
    }
  }
  return $br;
}

$granica = 76;

echo "<p>Broj blogova sa vise likova od $granica je : ". prekoGraniceBlog($blogovi,$granica). "</p>";

// Zadatak 31 :
echo "<hr>";
function prosecanSadrzaj($blogovi,$rec)
{
  $sum = 0;
  $br=0;
  foreach($blogovi as $blog)
  {
    if(strpos($blog["title"], $rec)!== false)
    {
      $sum += $blog["likes"];
      $br++;
    }
  }
  $sum = $sum/$br;
  return $sum;
}

$rec = "po";
echo "<p>Prosecan broj blogova koji sadrze rec $rec je :".prosecanSadrzaj($blogovi,$rec)."</p>";


// Zadatak 22 :
echo "<hr>";

$blogovi =
[
  ["title"=>"Priroda po Kisi","likes"=>54,"dislikes"=>30],
  ["title"=>"Sport!","likes"=>105,"dislikes"=>35],
  ["title"=>"Politika","likes"=>30,"dislikes"=>55],
  ["title"=>"Ljubav","likes"=>115,"dislikes"=>20]
];

function iznadProseka($blogovi)
{
  $prosek = prosecanBrojlikova($blogovi);
  foreach($blogovi as $blog)
  {
    if($prosek < $blog["likes"])
    {
      echo "<p> Blog sa natprosecenim brojem like-ova je : ". $blog["title"] ."</p>";
    }
  }
}

iznadProseka($blogovi);

// Zadatak 33 :
echo "<hr>";

function ispodProsecanDislike($blogovi)
{
  $sum = 0;
  foreach($blogovi as $blog)
  {
    $sum+=$blog["dislikes"];
  }
  $prosek = $sum /count($blogovi);
  foreach($blogovi as $blog)
  {
    if($blog["dislikes"] < $prosek)
    {
      echo "<p>Blog je imao ispodprosecan broj dislokov-a :". $blog["title"]  ."</p>";
    }
  }
}

ispodProsecanDislike($blogovi);