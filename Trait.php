<?php
require_once "SayGoodbye.php";

use Data\Traits\{Person, SayHello, SayGoodbye};

$person = new Person();
$person->goodbye("Joko");
$person->hello("Budi");

$person->name = "Eko";
var_dump($person);

$person->run();
?>