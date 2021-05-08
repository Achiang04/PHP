<?php

/*
note:  
var_dump = untuk liat tipe data suatu variable
*/

echo 'decimal : ';
var_dump(1234);

echo 'octal : ';
var_dump(01234);

echo 'hexadecimal : ';
var_dump(0x1a);

echo 'binary : ';
var_dump(0b1111111);

echo 'underscore di number : ';
var_dump(1_000_000);

echo "---------------------------------------\n";

echo 'Floating Point : ';
var_dump(1.234);

echo 'Floating Point dengan e notation : (1.7 x 1000) : ';
var_dump(1.7e3);

echo 'Floating Point dengan e notation  minus : (1.7 x 0.001) : ';
var_dump(7e-3);

echo 'Floating Point : ';
var_dump(1_234.24);

echo "---------------------------------------\n";

echo "integer overflow :\n";
var_dump(9223372036854775807);
var_dump(9223372036854775808);
