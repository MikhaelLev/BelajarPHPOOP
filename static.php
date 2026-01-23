<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name;

MathHelper::$name = "<br> Eko Kurniawan";
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10, 10, 10, 10, 10);
echo "<br><br> Result : $result" . PHP_EOL;
?>