<?php

/*
stdClass adalah class kosong bawaan dari php
stdClass  biasanya digunakan ketika kita melakukan konversi dari tipe lain menjadi tipe object
stdClass sangat berguna ketika misal kita ingin melukan konversi dari tipe data array ke object secara otomatis
*/

$array = [
    "name" => "asep",
    "umur" => "19",
    "jenis" => "bulldog",
];

$object = (object)$array;

var_dump($object);

echo $object->name . PHP_EOL;
echo $object->umur . PHP_EOL;
echo $object->jenis . PHP_EOL;

$arrayLagi = (array)$object;
var_dump($arrayLagi);

require_once "data/Person.php";

$person = new Person("asep", "buntu");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);