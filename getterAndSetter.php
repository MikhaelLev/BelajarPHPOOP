<?php
require_once "data/Category.php";

$category = new Category();
$category->setName("Handphone");
$category->setExpensive(True);

$category->setName("");
echo "Name : {$category->getName()} <br>" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;

//getter dan setter berfungsi supaya memprotect data lebih lagi
?>