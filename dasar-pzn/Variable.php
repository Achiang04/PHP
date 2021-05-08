<?php

// php bisa ubah tipe data kayak di js

$nama = 'asep';
echo $nama;
echo "\n";

$age = 10;
echo $age;
echo "\n";

$nama = 20;
echo $nama;
echo "\n";

/* 
variable variables 
jadi ini membuat value jadi variable
contoh 
test = testing
sama dengan 
testing = bambang; 
*/

$test = 'testing';
$$test = 'bambang';

echo $test;
echo "\n";
echo $testing;
echo "\n";
echo $$test;
echo "\n";

