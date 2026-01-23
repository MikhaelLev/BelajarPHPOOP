<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

$conflict1 = new Data\One\Conflict();
$conflict2 = new Data\Two\Conflict();

//cara menggunakannya harus menuliskan nama namescpace dulu di awal
echo Helper\APPLICATION . PHP_EOL;
?>