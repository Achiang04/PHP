<?php

/*
constant (immutable)
define() = const 
akses variable constant ga pake $ langsung nama variable
*/

define('TEST', 'woi mati aja');
// define('TEST', 'ga mau aku mati'); // error karena immutable

define('UMUR_ASEP', 100);

echo TEST;
echo "\n";
echo UMUR_ASEP;
echo "\n";
