<?php

$conta1 = [
    'titular' => 'Geovani',
    'saldo' => 5000
];

$conta2 = [
    'titular' => 'Keren',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'alura',
    'saldo' => 12000
];

$contascorrentes = [$conta1, $conta2, $conta3];

foreach ($contascorrentes as $conta){
    echo $conta ['titular'] . PHP_EOL;
}