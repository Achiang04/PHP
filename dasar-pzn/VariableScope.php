<?php

/*
global
variable yang di buat di luar function
hanya bisa di akses dari luar function
artinya kalau manggil function yang di luar dari dalam function maka ga akan bisa diakses
hanya bisa akses sesama di luar function aja
----------------------------------------------------------------------------------------------------
local
dibuat didalam function
hanya bisa diakses dari dalam function itu sendiri
artinya variable tersebut tidak bisa diakses dari luar function maupun dari function lain
----------------------------------------------------------------------------------------------------
static
secara default local variable itu siklus hidupnya hanya sebatas funcion nya dieksekusi
jika sebuah function selesai dieksekusi, maka siklus hidup local variable nya selesai
static scope hanya bisa diakses ke local scope
saat kita membuat sebuah locak state menjadi static, maka siklus hidupnya ga akan berhenti ketika
sebuah function selesai dieksekusi
artinya jika function tersebut dieksekusi lagi, maka static variable tersebut akan memiliki
value dari sebelumnya
----------------------------------------------------------------------------------------------------
global keyword
jika ingin mengakses variable yang ada di scope global / atau dari luar function bisa pake keyword global
----------------------------------------------------------------------------------------------------
$GLOBAL variable
setiap variable yang di buat di global scope secara otomatis akan disimpan dalam array $GLOBAL 
jadi bisa diakses dengan key nama variable nya dari function 
$GLOBAL bersifiat super global artinya bisa diakses dari scope manapun
----------------------------------------------------------------------------------------------------
intinya variable dalam php itu hanya bisa akses di scope yang sama
ga bisa scope yang diluar maupun didalam
*/

$name = "asep"; // global scope
// $GLOBALS["name"] = "asep; // dilakukan secara otomatis oleh php

function sayName() {
    echo $name . PHP_EOL; // error
    global $name; // global keyword
    echo $name . PHP_EOL; // sekarang udah ga error karena efek dari global keyword

    // var_dump($GLOBALS);
    echo $GLOBALS["name"] . PHP_EOL;
}
sayName();
// ----------------------------------------------------------------------------------------------------
function umur() {
    $umur = 18; // local
}
umur();
echo $umur; // error
//----------------------------------------------------------------------------------------------------
function increment() {
    // $counter = 1;
    // ini ketika di running maka function membuat variable nya sesuai dengan yang di declare
    // walaupun di panggil sebanyak apa pun
    static $counter = 1;
    // static mampu menyimpan variable sebelumnya
    // jadi kalau udah di panggil sebanyak 1 maka yang tadinya 1 naik jadi 2
    // di running selanjutnya dia tetap akan bawa value 2 itu
    // jadi function ga akan mereset value nya
    echo "counter $counter\n";
    $counter++;
}

increment();
increment();
increment();