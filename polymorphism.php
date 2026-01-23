<?php
require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Eko");
var_dump($company);

$company->programmer = new BackendProgrammer("Eko");
var_dump($company);

$company->programmer = new BackendProgrammer("Eko");
var_dump($company);

//polymorphism dapat merubah bentuk dari parent dan memasukkan data ke child 
//tergantung child (Backend dan Frontend) mana yang akan dipilih 

sayHelloProgrammer(new Programmer("Eko"));
echo "<br>";
sayHelloProgrammer(new BackendProgrammer("Eko"));
echo "<br>";
sayHelloProgrammer(new FrontendProgrammer("Eko"));
echo "<br>";

?>