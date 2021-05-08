<?php

/*
beberapa function regex di php

preg_match($pattern, $subject)= digunakan untuk mencari match pattern
preg_match_all($pattern, $subject) = digunakan untuk mencari match pattern
preg_replace($pattern, $replacement, $subject) = digunakan untuk mereplace semua pattern dengan replacement
preg_split($pattern, $subject) = digunakan untuk memotong dengan array pattern menjadi array
*/

$matches = [];
$result = (bool)preg_match_all("/dia|kamu|jahat/i", "dia suka KAMU tapi kamu nya enggak", $matches);
$result2 = preg_match_all("/dia|kamu|jahat/i", "dia suka KAMU tapi kamu nya enggak", $matches);
// arti i di bagian akhir pattern = incase sensitive = mau besar kecil ga masalah
var_dump($result);
var_dump($result2);
var_dump($matches);

$result3 = preg_replace("/anjing|bangsat/i", "***", "dasar lu anak anjing, BANGSAT");
var_dump($result3);

$result4 = preg_split("/[\s,-]/", "asep adalah anak haram dari ucup dan bambang, namun bam-bang tidak mengakuinya");
var_dump($result4);