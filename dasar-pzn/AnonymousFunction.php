<?php

/*
anonynous function = function tanpa nama
biasanya langsung di jadiin variable atau langsung jadi params aja
*/


$sayHello = function (string $name) {
    echo "Hello $name\n";
};

$sayHello("asep");

function sayHi(string $name, $callbackFunction) {
    $finalName = $callbackFunction($name);
    echo "hi $finalName\n";
}

sayHI("asep", function(string $name) {
    return strtoupper($name);
});

$variableFunciton = function(string $name) {
    return strtoupper($name);
};

sayHi("ucup", $variableFunciton);

echo "==============================\n";

/*
use = untuk menggunakan variable yang ada di luar anonymous function
karena disini ga bisa manggil variable yang ada di luar functionnya
*/

$a = 10;
$b = 10;

// $test1 = function () {
//     echo $a + $b . PHP_EOL;
// };
// kalau gini langsung dia ga bisa akses variable yang diluar itu 
// jadi kalau mau pake varialbe dari luar harus pake use

$test1 = function () use ($a, $b)  { // use ($a, $b) = bukan params
    echo $a + $b . PHP_EOL;
};
$a = 20;
$b = 20;

$test1(); // hasil nya ga berubah walaupun value nya diubah karena value nya masuk ke function ketika diatas bukan dibawah

$a = "dia";
$b = "sayang";

$test2 = function ($name) use ($a, $b)  {
    echo  "$a $b $name\n";
};
$test2("asep");