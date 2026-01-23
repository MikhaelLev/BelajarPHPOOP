<?php
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Joko");

$vp = new VicePresident();
$vp->name = "Eko";
$vp->sayHello("Joko");

//walaupun sudah tertulis joko, namun tetap tertulis vp
//karena yang dibaca adalah function overriding yang bawah

?>