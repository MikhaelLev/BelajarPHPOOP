<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

//Penggunaan alias hanya dengan menambahkan sintaks "as"

use Data\One\Conflict as Conflict1;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

$conflict1 = new Conflict1();
$conflict2 = new Data\Two\Conflict();

help();

echo APP . PHP_EOL;
?>