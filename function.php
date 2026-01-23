<?php
require_once "data/Person.php";

$eko = new Person("Mikha", "Jogja");
$eko -> name = "Eko";
$eko -> sayHello("Budi");

echo "<br><br>";
$joko = new Person ("Joko", "Cirebon");
$joko -> name = "Joko";
$joko -> sayHello(null);




echo "<br><br>";
$joko -> info();
echo "<br>";
$eko -> info();

?>