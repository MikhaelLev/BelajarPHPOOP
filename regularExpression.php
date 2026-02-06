<?php
$matches = [];
$result = preg_match_all("/eko|awan|edy/i", "Eko Kurniawan Khannedy", $mathces);

var_dump($result);
echo "<br>";
var_dump($matches);
echo "<br>";

//preg replace / mengganti kata
$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing dan bangsat");
var_dump($result);
echo "<br>";

//preg split
$result = preg_split("/[\s,-]/", "Eko Kurniawan Khannedy,Programmer,Zaman-Now");
var_dump($result);
echo "<br>";
?>