<?php

echo"Digite a sua idade: ";
$idade = trim(fgets(STDIN));

if ($idade >= 18) {
    echo "Você já é maior de idade";
} else if ($idade < 18) {
    echo "Você ainda não é maior";
}
