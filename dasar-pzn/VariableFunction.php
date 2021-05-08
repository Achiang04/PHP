<?php

/*
variable function
jadi nama function itu di tampung ke dalam satu variable
jadi ketika variable itu kepanggil
dia bakal bawa nama itu dan di tambahkan () maka dia otomatis jadi function

ke untungan nya apa
jadi nya bisa manggil function hanya dengan kasih nama nya aja tanpa ()
contoh di line 31

nah jadi walaupun yang dipassing itu string biasa
tapi kalau ditambahkan () dia bisa jadi function layak nya function biasa
*/

function sayHi() {
    echo "hi";
}

$hi = "sayHi";
$hi();

echo "\n";

function sayHello($nama) {
    echo "hello $nama";
}

$hello = "sayHello";
$hello("asep");

echo "\n======================================\n";

function saySayang(string $name, $function) {
    $finalName = $function($name);
    echo "dia sayang $finalName\n";
}

saySayang("Asep", "strtoupper"); // strtoupper = function untuk upperCase
saySayang("Asep", "strtolower");// strtolower = function untuk lowerCase
// saySayang("Asep", "test");// ini error karena test itu bukan function apa pun yang ada di php

function saySayang2(string $name, $function) {
    $finalName = $function($name);
    echo "dia sayang $finalName\n";
}

function sampleFunction(string $name): string {
    return "sama $name";
}

saySayang2("asep", "sampleFunction");