<?php

// keknya continue hanya bisa di loop

$counter = 1;

while (true) {
    echo "counter $counter\n";
    $counter++;

    if ($counter === 10) {
        break;
    }
}

echo "\n===================================\n";

for ($counter = 1; $counter <= 10; $counter++){
    if ($counter % 2 === 0) {
        continue;
    }
    echo "counter $counter\n";
}