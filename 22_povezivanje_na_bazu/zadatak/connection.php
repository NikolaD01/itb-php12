<?php
  $host = 'localhost';
  $user = 'admin';
  $pass = 'Painer22';
  $db = 'itbootcamp';

$conn = new mysqli($host, $user, $pass, $db);
if($conn->connect_error)
{
  die("nije uspela koneckija." . $conn->connect_error );
}
else
{
 
}