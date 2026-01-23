<?php
require_once "data/Person.php";

define ("APPLICVATION", "BElajar PHP OOP");
const APP_VERSION = "1.0.0";

echo APPLICVATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;
echo "<br><br>";
//untuk mengakses dari class, dapat menggunakan echo nama class dan :: NAMA_CONSTANT
echo Person::AUTHOR . PHP_EOL;
?>