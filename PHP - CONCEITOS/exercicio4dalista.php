<?php
$maior =0;
$menor=0;

do  {
echo"Digite um valor ou 0 para sair :";
    $valor = trim(fgets(STDIN));
    

    if ($maior < $valor) {
        $maior = $valor;
    }
    else if ($valor == 0) {
        echo " Você digitou 0 e o programa encerrou" .PHP_EOL;
    }
     else if($maior > $valor) {
        $menor = $valor;
    }  
}
while ($valor != 0);
   
echo" O maior valor é : $maior" .PHP_EOL;
echo" O menor valor é : $menor" .PHP_EOL;

  


