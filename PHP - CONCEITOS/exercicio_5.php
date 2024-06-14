<?php

echo"Digite um número: ";
$valor = trim(fgets(STDIN));

if ($valor % 2== 0) {
    echo "Esse número é par!";
} else { 
    echo "Esse número é impar";
}