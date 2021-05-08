<?php

// $counter = 1; // karena kurang dari 10 dia loop sebanyak 10
$counter = 100; // karena lebih dari 10 dia loop cmn sekali efek dari si do

do {
    echo "counter $counter\n";
    $counter++;
} while ($counter <= 10);