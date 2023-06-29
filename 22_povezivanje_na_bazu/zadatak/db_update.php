<?php
require_once 'connection.php';

/*
CREATE TABLE `db_update` 
(
  `id` INT(10) UNSIGNED PRIMARY KEY,
  `opis` VARCHAR(255) NOT NULL
)
*/

$upiti = [];

$upiti[] = [
  'id' => 1,
  'upit' =>
  'CREATE TABLE IF NOT EXISTS `studenti` 
 (
  `id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `ime` VARCHAR(50) NOT NULL,
  `prezime` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100),
  `broj_telefona` VARCHAR(20)
  )',
  'opis' => 'Dodavanje tabele studenti'
];


$upiti[] = [ 
  'id' =>2,
  'upit' => "INSERT INTO `studenti`
  VALUES
  (NULL,'Nikola','Devic','nikoladevic01@gmail.com','0616101544')",
  'opis' => 'insert student'
];


$upiti[] = 
[
  'id' => 3,
  'upit' =>"SELECT * FROM `studenti` ;",
  'opis' => 'select sve'
];


$upiti[] = [ 
  'id' =>4,
  'upit' => "INSERT INTO `studenti`
  VALUES
  (NULL,'Stefan','Gajinovic',NULL,NULL)",
  'opis' => 'insert student'
];
/*
$result = $conn->query($upit3);

if($result->num_rows > 0)
{
  while($row = $result->fetch_assoc()) // sve dok postoji red
  {
    echo "<p> id=".$row['id'] . " ime="  . $row['ime']."</p>";
  }
}
else
{
  echo 'nema rezulate za ovaj select :' . $upit3;
}


$r2 = $conn->query($upit3);
$arr = $r2->fetch_all(MYSQLI_ASSOC);

foreach($arr as $row)
{
  echo "<p> id=".$row['id'] . " ime="  . $row['ime']."</p>";
}

if($conn->query($upit2))
{
  echo 'uspesno napravljena tabela studenti';
}
else
{
  echo 'doslo je do grekse'. $conn->error;
}

*/

$izvrseni = $conn->query("SELECT `id` FROM `db_update`;");
$arr = $izvrseni->fetch_all(MYSQLI_ASSOC);
$ids = [];
foreach($arr as $value)
{
  $ids[] = $value['id'];
}

if(count($upiti)==count($ids))
{
  echo "svi upiti su izvrseni su vec izvrseni";
}
else
{
  foreach ($upiti as $u)
  {
    if(!in_array($u['id'], $ids))
    {
      // ako mi id od upita nije  u nizu vec izvrsenih onda ga izvrsimo
      $r = $conn->query($u['upit']);
      if($r)
      {
        $r2 = $conn->query("INSERT INTO db_update VALUES (".$u['id'].", '".$u['opis']."');");
        if(!$r2)
        {
          echo 'doslo je do greske:' . $conn->error;
          break;
        }
      }
      else
      {
        echo 'doslo je do greske:' . $conn->error;
        break;
      }
    }
    
  }
}

