<?php
$array = [
    "firstName" => "Eko",
    "middleName" => "Kurniawan",
    "lastName" => "Khannedy"
];

$object = (object) $array;

var_dump($object);

echo "<br><br>First Name $object->firstName" . PHP_EOL;
echo "Middle Name $object->middleName" . PHP_EOL;
echo "Last Name $object->lastName" . PHP_EOL;

echo "<br><br>";
$arrayLagi = (array) $object;
var_dump($arrayLagi);


require_once "data/Person.php";

echo "<br><br>";
$person = new Person("Eko", "Subang");
var_dump($person);

echo "<br><br>";
$arrayPerson = (array)$person;
var_dump($arrayPerson);
?>