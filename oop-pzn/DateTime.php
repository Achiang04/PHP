<?php

/*
beberapa function di dateTime
setTime($hour, $minute, $second) = mengubah waktu dateTime
setDate($year, $month, $day) - mengubah tanggal dateTime
setTimeStamp($unixTimeStamp) = mengubah unit timestamp dateTime

dateInterval = bisa digunakan untuk mengubah time/date tertentu saja
tanpa harus mengubah semuanya, misal mau ganti tahun nya aja
hal ini bisa dilakukan dengan function add milik DateTime
namun function add tersebut menerima parameter berupa DateInterval
saat menggunakan DateInterval Duration, kita perlu menentukan berapa banyak kita menambah interval
untuk pembuatan duration harus diawali dengan kareakter P yang artinya period

period
Y = year
M = Month
D = Days
W = Weeks
H = Hours
M = Minutes
S = Second

function setTimeZone untuk mengubah time zone

format date time 
function format() = bisa digunakan untuk merepresentasikan dateTime sudah di buat
funciton format() = menerima argument berupa format string, ini bisa kita gunakan untuk memanipulasi cara kita menampilkan string
format waktu

parse date time
function createFromFormat() = bisa digunakan untuk memparsing string menjadi dateTime sesuai dengan format yang kita mau
*/

$date = new DateTime();
var_dump($date);

$date->setDate(2020, 12, 30);
$date->setTime(12,12,12);

var_dump($date);

$date->add(new DateInterval("P1Y")); // P1Y = Period 1 Year
var_dump($date);

$minusOneMonth = new DateInterval("P1M"); // P1M = Period 1 Month
var_dump($minusOneMonth);
$minusOneMonth->invert = 1; // 1 = true
var_dump($minusOneMonth);

$date->add($minusOneMonth);
var_dump($date);

$zone = new DateTime();
$zone->setTimeZone(new DateTimeZone("Asia/Singapore"));

var_dump($zone);

$string = $zone->format("Y-m-d H:i:s");
echo $string . PHP_EOL;

$parsingDate = DateTime::createFromFormat("Y-m-d H:i:s", "1998-12-29 10:10:10", new DateTimeZone("Asia/Jakarta"));
var_dump($parsingDate);
$parsingDate2 = DateTime::createFromFormat("Y-m-d H:i:s", "salah", new DateTimeZone("Asia/Jakarta")); // false karena error
var_dump($parsingDate2);
if ($parsingDate2) {
    var_dump($date);
} else {
    echo "Format Salah\n";
}