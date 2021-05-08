<?php

/**
 * $a++ = return a kemudian ditambah 1
 * ++$a = naikan 1 angka baru return a
 * 
 * kalau dimasukin ke variable sistem increment and decrement nya agak beda js sama php 
 */

 $a = 10;
 $e = 10;
 
 // pre increment
 $b = ++$e; // 11 = a ditambahkan dulu baru diassign ke b

// contoh
// e = e+1; 
// b = e;   

var_dump($e);
var_dump($b);

echo "\n========================\n";

// post increment
 $c = $a++; // 10 = a diassign dulu ke b baru ditambahkan
$d = $a++; // 11 = baru jadi 11 ksetelah run yang kedua karena sistemnya assign dulu baru tambah

// contoh
// c = a;   nah jadi c disini masih 10 baru jadi 11 setelah yang bawah nya 
// a = a+1;     disini baru jadi 11

 var_dump($a); // jadi 12 karena ditambahkan 2x
 var_dump($c);
 var_dump($d);

 echo "\n========================\n";

 $a++;
 ++$a;
 var_dump($a); 
 /* 
 tapi kalau ga dimasukin ka variable dia biasa aja ke di js

ini sama aja ga ada beda tetap akan 11 valuenya

*/