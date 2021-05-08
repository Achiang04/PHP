<?php

/*
require and include
require = jika file ga ada, maka program akan berhenti dan error
include = fika file ga ada, program akan tetap lanjut hanya peringatan aja
hmm... pas di coba sama aja sih include tetap error juga

*/

// require "MyFunction/MyFunction.ph"; // contoh file ga ada => error => failed to open stream: No such file or directory
// require "MyFunction/MyFunction.php";

// include "MyFunction/MyFunction.php"; 
// contoh file ga ada => error => failed to open stream: No such file or directory &
//  Uncaught Error: Call to undefined function sayHello()
// include "MyFunction/MyFunction.php";

require_once "MyFunction/MyFunction.php";
require_once "MyFunction/MyFunction.php";
include_once "MyFunction/MyFunction.php";
include_once "MyFunction/MyFunction.php";
/*
konsep dari once itu kalau dia udah ada load 1 x maka dia ga akan ngeload lagi untuk yang ke 2
walaupun di panggil berkali kali
*/

echo sayHello("asep");
echo "test\n";