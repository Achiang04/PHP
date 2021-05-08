<?php

/*
interface mirip sama dengan abstract
beda nya kalau abstract masih bisa bikin function biasa 
dan function abstract
tapi kalau di interface udah ga bisa bikin function biasa
dia harus abstract semua

interface juga ga boleh ada field/properties
harus constant semua

untuk extends di interface ga bisa lagi pake extends untuk
turunkan ke child harus pake yang namanya implements sama
kayak di java

dan php juga bisa interface lebih dari 1

interface secara default function nya udah abstract jadi udah
ga perlu di ketik abstract di setiap awalana functionnya

interface hanya bisa extends ke sesama interface ga bisa
extends dari class biasa
*/

require_once "data/Car.php";

use Data\{Avanza};

$car = new Avanza();
$car->drive();
echo $car->getTire() . PHP_EOL;
echo $car->getBrand();
echo $car->isMaintenance() . PHP_EOL;