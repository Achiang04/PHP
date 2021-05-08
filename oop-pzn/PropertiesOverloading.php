<?php

/*
overloading disini ga sama dengan overloading di java
jadi di php ga bisa bikin nama function yang sama kayak konsep dari overloading

jadi overloading disini 
adalah kemampuan secara dinamis membuat properties atau function
overloading ini erat kaitannya dengan magic function
jadi cara kerjanya gini

saat kita mengakses properties, maka seacara otomatis properties akan diakses
namun jika ternyata properties tersebut tidak tersedia di objectnya, maka PHP tidak secara otomatis menjadikan itu error
php akan melalukan fallback ke magic function
namun secara default jika di class tersebut tidak ada magic function untuk overloading dia akan langsung membuat code jadi error

ada beberapa magic function untuk properties overloading
__set($name, $value):void = dieksekusi ketika mengubah proerties yang tidak tersedia
__get($name): mixed = dieksekusi ketika mengakses properties yang tidak tersedia
__isset($name):bool = dieksekusi ketika mengecek isset() atau empty() properties yang tidak tersedia
__unset($name):void = dieksekusi ketika menggunakan unset() properties yang tidak tersedia
 */

class Zero {
    private array $properties = [];
    public string $firstName = "asep";

    public function __get($name) {
        echo "access property $name\n";
        return "contoh";
    }

    public function __set($name, $value) {
        echo "set property $name with value $value\n";
    }

    public function __isset($name): bool {
        echo "isset $name\n";
        return false;
    }

    public function __unset($name) {
        echo "unset $name\n";
    }
}

$zero = new Zero();
echo $zero->firstName . PHP_EOL;
// akan error kalau ga ada magic function overloading nya 
// Undefined property: Zero::$firstName
// tapi kalau ada magic function overloading nya maka function nya akan dipanggil

echo $zero->middleName . PHP_EOL;
$zero->middleName = "bambang";
isset($zero->middleName);
unset($zero->middleName);

echo "====================================\n";

class Zero2 {
    private array $properties = [];

    public function __get($name) {
        return $this->properties[$name];
    }

    public function __set($name, $value) {
        $this->properties[$name] = $value;
    }

    public function __isset($name): bool {
        return isset($this->properties[$name]);
    }

    public function __unset($name) {
        unset($this->properties[$name]);
    }
}

$zero2 = new Zero2();
$zero2->firstName = "asep";
$zero2->umur = 18;
echo "first name : $zero2->firstName" .PHP_EOL;
echo "umur : $zero2->umur" .PHP_EOL;
