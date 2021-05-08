<?php

$names = ["bambang", "asep", "ucup"];

for ($i = 0; $i < count($names); $i++){
    echo "woi $names[$i]\n";
}

echo "======================\n";

// forEach
forEach($names as $temp) {
    echo "woi $temp\n";
}

echo "======================\n";

forEach($names as $key => $temp) {
    echo "$key : $temp\n";
}

echo "======================\n";

// for each with key
$person = [
    "names" => "ucup",
    "umur" => "18",
    "kelamin" => "cowok"
];

forEach($person as $key => $value) {
    echo "$key : $value\n";
}