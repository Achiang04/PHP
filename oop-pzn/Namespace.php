<?php

/*
namespace = bisa menyimpan class class
namespace bisa nested
cara akses namespace 
nameSpace\class

dalam namespace bisa punya beberapa class yang sama 
dengan namespace nama class yang sama tidak akan error

untuk membuat namespace bisa menggunakan keyword namespace
kalau mau buat nested namespace atau sub namespace
bisa menggunakan \
dan boleh beberapa x
a\b\c\d

contoh namepsace bisa di liat di data/Conflict


Global Namspace
secara default saat kita membuat kode sebenarnya 
itu disimpan di global namespace
global namespace adalah namespace yang tidak memiliki nama namespace
*/

namespace { // global namespace

require_once "data/Conflict.php";
require_once "data/Helper.php";


// tanpa namespace, class yang sama akan error

$conflict1 = new \Data\one\Conflict();
$conflict2 = new \Data\two\Conflict();

\Helper\helpMe();
echo \Helper\TOLONG;

}