<?php

$counter = 1;

while ($counter <= 10) {
    echo "counter $counter\n";
    $counter++;
}
echo "=============================\n";
// cara lain

$counter = 1;
while ($counter <= 10) :
    echo "counter $counter\n";
    $counter++;
endwhile;