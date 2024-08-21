<?php

    class produto {
        private $nome;
        private $preco = 0;
        private $quantidade = 0;

        function __construct($nome, $preco, $quantidade){
            $this->nome = $nome;
            $this->preco = $preco;
            $this->quantidade = $quantidade;
        }

        function alterarPreco ($novoPreco){
            echo "O novo preco é:{$novoPreco}" .PHP_EOL;
            $this->preco = $novoPreco;
        }

        function ajustarEstoque ($quantidade){
            echo "A nova quantidade é: {$quantidade} " .PHP_EOL;
            $this-> quantidade = $quantidade;
        }

        function exibirDetalhes (){
            echo $this->nome .PHP_EOL;
            echo $this->preco .PHP_EOL;
            echo $this->quantidade .PHP_EOL;
        }

    }
    
    echo "         PRODUTO" .PHP_EOL;
    echo "===========================" .PHP_EOL;
    $produto = new produto('Notebook', 2500, 5);
    $produto->exibirDetalhes();
    echo "===========================" .PHP_EOL;
    echo "         ALTERAÇÃO" .PHP_EOL;
    echo "===========================" .PHP_EOL;
    $produto->alterarPreco(5000);
    $produto->ajustarEstoque(2);
    echo "===========================" .PHP_EOL;
    echo "         PRODUTO" .PHP_EOL;
    echo "===========================" .PHP_EOL;
    $produto->exibirDetalhes();
