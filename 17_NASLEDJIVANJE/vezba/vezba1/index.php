<?php

require_once "osoba.php";
require "Zaposleni.php";

$o = new Osoba("Nikola", "Devic", 2001);
$o->ispis();

$z = new Zaposleni("Nikola", "Devic", 2001, 65000, "Backend Developer");
$z->ispisZaposleni();