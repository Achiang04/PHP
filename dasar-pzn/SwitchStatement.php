<?php

$nilai = "B";

switch($nilai) {
    case "A":
        echo "anda lulus\n";
        break;
    case "B";
    case "C";
        echo "anda tinggal kelas\n";
        break;
    default:
        echo "mati aja sana\n";
}

// cara lain
switch($nilai) :
    case "A":
        echo "anda lulus\n";
        break;
    case "B";
    case "C";
        echo "anda tinggal kelas\n";
        break;
    default:
        echo "mati aja sana\n";
    endswitch;