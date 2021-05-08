<?php

goto a;
echo "Hello Uii\n"; // ini di skip karena di line 3 langsung go to ke 7

a:
echo "masuk ke goto a\n";

echo "======================\n";

$counter = 1;
while (true) {
    echo "counter $counter\n";
    $counter++;

    if ($counter === 10) {
        goto end;
    }
}

end: 
echo "end loop using goto\n";