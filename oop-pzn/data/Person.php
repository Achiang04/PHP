<?php

/*
membuat field di class harus tambahkan keyword var 

ketika kita buat type declaration maka secara otomatis kita ga bisa
memgirimkan data null ke properties tersebut
maka dari itu ada yang namanya nullable type, jadi kita bisa
mengirimkan data null ke propertie
caranya dengan tambahkan ? sebelum type declaration

constructor = function yang akan dipanggil saat pertama x buat object
__construct()

desctructor = function yang akan dipanggl ketika object dihapus 
dari memory
__destruct()
*/

class Person {
    const AUTHOR = "achiang";

    var string $name;
    var ?string $address = null; // nullable type
    var string $country = "Indonesia"; // default value kalau ga
    // di setting ketika buat object maka value nya otomatis indonesia

    public function __construct(string $name, ?string $address) {
        $this->name = $name;
        $this->address = $address;
    }

    function sayHi(string $name) {
        echo "Hi $name\n";
    }

    function sayHello (?string $name) {
        if (is_null($name)) {
            echo "Hello, my name is $this->name\n";
        } else {
            echo "Hello $name, my name is $this->name\n";
        }
    } 

    function info() {
        /*
        kalau dalam class yang sama bisa langsung akses
        consant dengan keyword self
        self::namaConstant
        */
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }

    public function __destruct() {
        echo "Object Person $this->name is removed\n";
    }
}