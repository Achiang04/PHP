<?php

$data = [
    "action" => "testing"
    // "action" => null
];

if (isset($data["action"])){
    $action = $data["action"];
} else {
    $action = "nothing";
}

echo $action . PHP_EOL;


/*
null coleascing operator itu sama dengan ternary operator versi singkat di js
*/

echo $data["action"] ?? "nothing";
echo PHP_EOL;