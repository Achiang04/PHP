<?php

// function sayHello() {
//     echo "hello\n";
// }

sayHello(); //tetap bisa jalan
sayHello();

function sayHello() {
    echo "hello\n";
}

// $contoh = true;
$contoh = false;

if ($contoh) {
    function sayHI() {
        echo "hi\n";
    }
}

sayHI(); 
// akan error karena function blm dibuat efek dari contoh yang false, 
// kalau contoh true function akan dibuat dan function bisa dipanggil 