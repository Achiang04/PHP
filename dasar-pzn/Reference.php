<?php

/*
assign by reference
& = reference
bisa membuat beberapa variable menuju ke value yang sama
misal ada 2 variable yang isi value nya sama
jadi ketika variable 1 diganti maka variable 2 pun akan ikut berubah

pass by reference
mengirim data ke function dengan reference
perubahan data yang terjadi pada function
akan merubah juga ke variable yang dikirim di paramsnya

returning reference
mengembalikan reference pada function dengan return
*/

$name = "asep";
echo $name . PHP_EOL;

$otherName = &$name;
echo $otherName . PHP_EOL;

$otherName = "ucup";
echo $otherName . PHP_EOL;
echo $name . PHP_EOL;

echo "=======================================\n";

function increment(int &$value) {
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;

echo "=======================================\n";

function &getValue() {
    static $value = 100;
    return $value;
}

$a = &getValue(); // ini membuat a menjadi value yang reference ke $value di dalam function
$a = 200;

$b = &getValue();
echo $b . PHP_EOL; 
// karena $a di ubah yang dmna a itu udah reference ke $value
// maka $b yang udah reference juga ke $value akan ikut berubah