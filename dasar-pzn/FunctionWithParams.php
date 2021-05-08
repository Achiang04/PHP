<?php

function sapa($waktu, $name) {
    echo "$waktu $name\n";
}

sapa("siang", "ucup");

echo "=========================\n";

function woi($name = "dia") {
    echo "sayang $name\n";
}

woi("ucup");
woi(); // default tanpa params akan di isi jadi dia

echo "=========================\n";

function orang($orang, $name = "dia") {
    echo "$orang sayang $name\n";
}

orang("ucup");
orang("asep", "ucup");

echo "=========================\n";

function orang2($orang = "dia", $name) {
    echo "$orang sayang $name\n";
}

// orang2(,"ucup"); 
// ini akan error karena ga bisa kirim params yang kosong gitu,
// kalau di isi satu pun tetap akan error karena yang di baca sebagai params 1, params 2 nya masih kosong 
orang2("asep", "ucup"); // ini normal

echo "=========================\n";

function orang3($orang, $name = "") {
    echo "$orang sayang $name\n";
}

orang3("asep", "ucup");
orang3("asep");
orang3(10, 10); // karena ada parsing otomatis ini bisa
// tapi akan problem kalau emang mau buat function yang hanya terima params tipe data tertentu 
// nah itu bisa pakai yang namanya type declaration

echo "=========================\n";

function sum(int $a, int $b) {
    echo $a + $b . PHP_EOL;
}

sum(10, 10);
// sum("asep", "ucup"); // ini akan error karena params yang dia terima cmn int
sum("10", "10"); // nah yang ini masih bisa karena ketika di jalankan dia akan coba parsing dulu kalau bisa dia success 
// kalau enggak bisa ya error 
sum(true, false); // ini juga bisa karena dalam php true = 1 , false = 0


echo "=========================\n";

/*
... = variable-length argument list
fungsinya bisa langsung membuat params yang diterima jadi array walaupun yang dikirim itu bukan array
kalau ada lebih dari 1 params maka harus ditarok kan paling akhir
*/

function sumAll(...$values) {
    $total = 0;
    foreach($values as $nilai) {
        $total += $nilai;
    }
    echo "total " . implode(" + ", $values) . " = $total\n";
    /*
    implode($values)
    implode ini berfungsi kayak pemisah
    jadi dari yang value nya itu array dipisah ke string,
    hasil = 12345

     implode(" + ", $values)
     kalau yang ini sama cmn setiap pemisah di tambahkan dengan yang dimasukkan di params 1
     hasil nya bakal gini 
     hasil = 1 + 2 + 3 + 4 + 5
    */
}

$values = [1,2,3,4,5];

sumAll(1,2,3,4,5);
// sumAll($values); // ini error karena values yang diterima itu cmn untuk yang ... / atau yang blm jadi array 
// kalau mau tambahkan array yang udah jadi ke tipe data ...
// itu harus tambah ... didepan values nya 
sumAll(...$values);

