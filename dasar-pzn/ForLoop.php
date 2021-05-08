<?php

// contoh infinity loop
// for (; ;) {
//     echo "ga berhenti";
// }

// $counter = 1;
// for (; $counter <= 10 ;) {
//     echo "counter $counter\n";
//     $counter++;
// }

// for ($counter = 1 ; $counter <= 10 ;) {
//     echo "counter $counter\n";
//     $counter++;
// }

for ($counter = 1 ; $counter <= 10 ; $counter++) {
    echo "counter $counter\n";
}

echo "==================================\n";

for ($counter = 10 ; $counter > 0 ; $counter--) {
    echo "counter $counter\n";
}

echo "==================================\n";
// cara lain
for ($counter = 10 ; $counter > 0 ; $counter--) :
    echo "counter $counter\n";
endfor;