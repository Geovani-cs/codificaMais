<?php
echo"Digite o primeiro número:";
$num1 = trim(fgets(STDIN));

echo"Digite o segundo número:";
$num2 = trim(fgets(STDIN));
$soma = $num1 + $num2;
echo "A soma dos dois números é igual a $soma";