<?php

/*
unset = untuk menghapus variable secara codingan
isset = untuk ngecek apakah ada atau enggak, dan kalaupun ada ngecek jg value nya null atau enggak
*/

$name = 'asep';
echo $name;
echo "\n";
$name = null;
echo $name;
echo "\n";

$age = null;
echo $age;
echo "\n";

echo is_null($age);
echo "\n";

$test = 1;
echo is_null($test);
var_dump(is_null($test));
echo "\n";

// unset
$contoh = "bambang";
unset($contoh);

echo $contoh;

// isset

var_dump(isset($contoh)); // false

$contoh = "asep";
var_dump(isset($contoh)); // true

$contoh = null;
var_dump(isset($contoh)); //false