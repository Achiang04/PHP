<?php

/*
. = untuk menambahkan string / menggabungkan 2 string
kalau di js itu +

PHP_EOL = "\n";

*/

$name = "asep";

echo "name : " . $name . PHP_EOL;
echo "nilai : " . 100 . "\n";

echo "name : ".$name.PHP_EOL;

echo "\n====================================\n";

// konversi / parsing

$valueString = (string)100;
var_dump($valueString);

$valueInteger = (int)"100";
var_dump($valueInteger);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

echo "\n====================================\n";

// mengakses karakter

echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
// echo $name[4] . PHP_EOL; // error karena index 4 ga ada


echo "\n====================================\n";

// variable parsing / kalau di js itu template literals
echo "woi $name, mati aja kau sana" . PHP_EOL;

/*
curly brace = cara untuk menambahkan karakter tepat setelah variable
contoh
echo "woi $name, mati aja kau sana" . PHP_EOL;
kalau di tambah kan s setelah $name pasti akan error karena yang kebaca jadi variable $names bukan name
*/

echo "woi {$name}s, mati aja kau sana" . PHP_EOL;