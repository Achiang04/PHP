<?php

/*
iterator dengan yield
*/

// tanpa yield iterator
function getGenap(int $max): Iterator {
    $array = [];
    for ($i = 0; $i <= $max; $i++){
        if ($i % 2 === 0) {
            $array[] = $i;
        }
    }
    return new ArrayIterator($array);
}

foreach(getGenap(100) as $value) {
    echo $value . PHP_EOL;
}


echo "\n=======================================\n";

// dengan yield iterator
function getGanjil(int $max): Iterator {
    for ($i = 0; $i <= $max; $i++){
        if ($i % 2 === 1) {
            yield $i;
        }
    }
}

foreach(getGanjil(100) as $value) {
    echo $value . PHP_EOL;
}