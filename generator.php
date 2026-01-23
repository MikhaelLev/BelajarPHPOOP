<?php
function getGenap(int $max): Iterator
{
    $array = [];

    for ($i = 1; $i <= $max; $i++){
        if ($i %2 == 0) {
            $array[] = $i;
        }
    }
    return new ArrayIterator($array);
}

foreach (getGenap(100) as $value){
    echo "Genap : $value" . PHP_EOL;
}

echo "<br><br>";

function getanjil(int $max): Iterator
{
    for ($i = 1; $i <= $max; $i++){
        if ($i %2 == 0) {
            yield $i;
        }
    }
}

foreach (getanjil(100) as $value){
    echo "Ganjil : $value" . PHP_EOL;
}
?>