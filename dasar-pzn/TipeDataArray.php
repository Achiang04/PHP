<?php

/*
array flexbile bisa ubah tipe data dari int ke string atau ke lainnya

$array[] = push di php

unset($array[index]) = hapus data di index array
sistem penghapusnnya
misalkan ada index 0,1,2
unset index 1 maka index langsung loncat
0 2
index 1 jadi ilang

count($array) = .length di php


array dan map(key and value) di itung sama
*/

$values = array(1,2,3,4,5);
var_dump($values);

$names = ["asep", "bambang", "ucup"];
var_dump($names);

var_dump($names[1]);
$names[1] = "jancuk";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "kapten";
var_dump($names);

var_dump(count($names));


/* 
map(key and value) = object di js 
key secara default di map php itu int number
*/

// contoh key default
// $anjing = array(
//     0 => "bobo",
//     1 => "jantan",
//     2 => 3,
// );

$anjing = array(
    "nama" => "bobo",
    "jenis" => "jantan",
    "umur" => 3,
    "owner" => array(
        "nama" => "asep",
        "umur" => 18,
    )
);

var_dump($anjing);
var_dump($anjing["nama"]);
var_dump($anjing["owner"]["nama"]);

$kucing = array(
    "nama" => "toto",
    "jenis" => "betina",
    "umur" => 2,
    "owner" => [
        "nama" => "ucup",
        "umur" => 20,
    ]
);

var_dump($kucing);
var_dump($kucing["nama"]);
var_dump($kucing["owner"]["nama"]);


