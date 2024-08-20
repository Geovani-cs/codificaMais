<?php

echo"Digite o 1 º número: ";
$num = trim(fgets(STDIN));

$maior= $num;
$menor= $num;


for ($i = 2; $i <= 10; $i++) {
    echo "Digite o $i º número: ";
    $num= trim(fgets(STDIN));

    if ($num < $menor) {
        $menor= $num;
    } elseif ($num > $maior){ 
        $maior = $num;
    }
}
    echo "O maior número é: $maior" .PHP_EOL;
    echo"e O menor número é: $menor" .PHP_EOL;
