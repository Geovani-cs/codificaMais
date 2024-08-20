<?php

class ContaBancaria{
        private $numeroConta;
        private $nomeTitular;
        private $saldo=0;

        function __construct($numeroConta, $nomeTitular){
                $this->numeroConta = $numeroConta;
                $this->nomeTitular = $nomeTitular; 
        }

        function exibirSaldo(){
            echo "O saldo da sua conta é: ".$this->saldo.PHP_EOL;
        }

        function depositar($quantia){
            $this->saldo += $quantia;
            echo "Depósito efetuado de {$quantia}, o saldo atual é de: " .$this->saldo. PHP_EOL;
        }

        function sacar($quantia){
            if ($quantia > $this->saldo){
                echo "Saldo insuficiente." .PHP_EOL;
                return;
            }
            $this->saldo -= $quantia;
            echo "Saque realizado de {$quantia}, o saldo atual é de: " .$this->saldo. PHP_EOL;
        }


}


$conta = new ContaBancaria(3214,'Geovani');
$conta->exibirSaldo();
$conta->depositar(1000);
$conta->depositar(500);
$conta->sacar(2000);

