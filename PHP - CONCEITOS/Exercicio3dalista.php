<?php

/*Escreva um código PHP que solicita ao usuário dois números inteiros, a e b,
e calcula a soma de todos os números ímpares no intervalo [a, b] (inclusive).
Certifique-se de que a seja menor ou igual a b. Se a for maior que b, solicite
ao usuário que insira novamente os valores.*/

echo"Digite o valor de A: ";
$a = trim(fgets(STDIN));
echo "Digite o valor de B: ";
$b= trim(fgets(STDIN)); 

if ( $a > $b ) {
    echo "O valor de A não pode ser maior que o de B! Digite outro valor: ";
} else {    
    $soma=0;
    for ($i= $a; $i <= $b; $i++) {
        if ( $i % 2 != 0) {
            $soma += $i;
    }
}
}
echo " O valor da soma dos números ímpares é: $soma";