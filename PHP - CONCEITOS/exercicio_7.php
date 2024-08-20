<?php

echo"Digite uma valor para calcularmos a tabuada: ";
$valor = trim(fgets(STDIN));

for ($i = 1; $i <= 10; $i++) {
    $resultado= $i*$valor;
    echo "$valor X $i =  $resultado " .PHP_EOL;
}
