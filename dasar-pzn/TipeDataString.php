<?php

echo 'Nama : ';
echo 'Ucup';
echo "\n";
echo '\n'; // ga bisa pake petik 1 harus 2
echo "\n";

echo "---------------------------------------\n";

echo "nama\t:\tJecky Hindrawan";
echo "\n";

echo "---------------------------------------\n";

echo <<<PARAGRAPH
ini nama nya heredoc
fungsinya untuk multiline dan tiap tulisannya asli ikut enter nya jg
untuk kata PARAGRAPH yang jadi tag itu bebas boleh apa aja
PARAGRAPH;

echo "\n---------------------------------------\n";

echo <<<'PARAGRAPH'
ini nama nya nowdoc
bentuk nya mirip dengan heredoc
cmn ga bisa parsing

PARAGRAPH;
