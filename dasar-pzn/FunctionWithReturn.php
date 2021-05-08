<?php

function sumWithReturn(int $a, int $b) {
    return $a + $b;
}

echo sumWithReturn(10, 10) . PHP_EOL;
$temp  = sumWithReturn(20, 20);
echo $temp . PHP_EOL;

echo "=========================\n";

function nilaiHuruf(int $value) {
    if ($value > 50 && $value <= 100) {
        return "Kamu lulus";
        echo "oi"; // ini tidak akan dijalankan karena setelah return code langusng selesai
    } else if ($value >= 0 && $value <= 50) {
        return "Maaf anda tidak lulus";
    } else {
        return "nilai invalid";
    }
}

echo nilaiHuruf(60) . PHP_EOL;
echo nilaiHuruf(40) . PHP_EOL;
echo nilaiHuruf(-10) . PHP_EOL;

echo "=========================\n";

function sumWithReturnTypeInt(int $a, int $b): int { // declare function ini bakal return value nya int
    return $a + $b;
    // return "$a $b"; // ketika return value ga sesuai dengan yagn udah di declare dia bakal error
}

echo sumWithReturnTypeInt(10, 10) . PHP_EOL;

function sumWithReturnTypeString(int $a): string { // declare function ini bakal return value nya string
    return $a; // langsung di konversikan value nya ke string walaupun inputnya int
}

var_dump(sumWithReturnTypeString(10)); 