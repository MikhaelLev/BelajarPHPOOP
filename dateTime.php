<?php

use Symfony\Component\VarDumper\VarDumper;

$dateTime = new DateTime();
$dateTime->setDate(1990, 1, 20); //rubah tanggal
$dateTime->setTime(10, 10, 10, 0); //rubah waktu

$dateTime->add(new DateInterval("P1Y")); //buat nambahin 1 tahun

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true; //buat minus in waktu



var_dump($dateTime);
echo "<br>";

$now = new DateTime();
var_dump($now);
$now->setTimeZone(new DateTimeZone("Asia/Jakarta"));
var_dump($now);

echo "<br>";
$string = $now->format("Y-m-d H:i:s");
echo "Waktu saat ini : $string" . PHP_EOL;

echo "<br>";
$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10", new DateTimeZone("Asia/Jakarta"));
var_dump($date);

if ($date){ //jika ditambahkan percabangan jika tanggal salah
    var_dump($date);
} else {
    echo "Format salah" . PHP_EOL;
}
?>