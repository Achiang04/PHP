<?php

/*
saat kita mengakses function, maka seacara otomatis function akan diakses
namun jika ternyata function tersebut tidak tersedia di objectnya, maka PHP tidak secara otomatis menjadikan itu error
php akan melalukan fallback ke magic function
namun secara default jika di class tersebut tidak ada magic function untuk overloading dia akan langsung membuat code jadi error

ada beberapa magic function untuk function overloading
__call($name, $arguments): mixed = dieksekusi ketika memanggil function yang tidak tersedia
static __callStatic($name, $arguments): mixed = dieksekusi ketika memanggil static function yang tidak tersedia
*/

class Zero {
    public function __call($name, $arguments) {
        $join = join(",", $arguments);
        echo "call function $name with arguments $join\n";
    }

    public static function __callStatic($name, $arguments) {
        $join = join(",", $arguments);
        echo "Call static function $name with arguments $join\n";
    }
}

$zero = new Zero();
$zero->sayHello("asep", "ganteng");

Zero::sayHello("asep", "ganteng");