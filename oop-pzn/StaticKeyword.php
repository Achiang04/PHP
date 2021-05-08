<?php

/*
static = masih sama dengan yang dijava
bisa langusng akses ke funcio, class, properties tanpa harus buat object lagi
untuk akses static itu bisa pake ::

namun ingat, saat kita buat static , secara otomatis hal itu tidak akan berhubungan lagi dengan class instance yang kita buat
static function tidak bisa mengakses function biasa, karena function biasa menempel pada class instance sedangkan 
staitc function tidak
*/

require_once "helper/MathHelper.php";

use Helper\MathHelper;

// $mathHelper = new MathHelper();
// echo $mathHelper->name; 
// error  Undefined property Accessing static property 

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "asep";

echo MathHelper::$name . PHP_EOL;

$total = MathHelper::sum(10, 10, 10, 10, 10);
echo $total , PHP_EOL;