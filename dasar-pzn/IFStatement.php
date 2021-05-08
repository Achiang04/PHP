<?php

$nilai = -90;

if ($nilai >= 75 && $nilai <= 100) {
    echo "selamant anda lulus\n";
} else if ($nilai > 0 && $nilai < 75) {
    echo "maaf anda tidak lulus\n";
} else {
    echo "anda goblok\n";
}

// cara lain
if ($nilai >= 75 && $nilai <= 100) :
    echo "selamant anda lulus\n";
 elseif ($nilai > 0 && $nilai < 75):
    echo "maaf anda tidak lulus\n";
 else :
    echo "anda goblok\n";
 endif;