<?php
require_once "data/Person.php";

$person1 = new Person("Budi", null);
//jika ingin mengubah nama menggunakan tanda ->
//Jika ingin mengambil data dapat menggunakan kurung kurawal

$person1 -> name = "Eko";
$person1 -> adress = "Subang";
var_dump($person1);
echo "<br><br>";
echo "Name : {$person1 -> name}" . PHP_EOL;
echo "Adress : {$person1 -> adress}" . PHP_EOL;
echo "Country : {$person1 -> country}" . PHP_EOL;

echo "<br><br>";

$person2 = new Person("Eko", "Subang");
$person2 -> name = "Budi";
$person2 -> adress = "Jakarta";
$person2 -> country = "Indonesia";
var_dump($person2);

?>