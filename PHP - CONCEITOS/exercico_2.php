<?php
echo"Digite a primeira nota:";
$nota1 = trim(fgets(STDIN));

echo"Digite a segunda nota:";
$nota2=trim(fgets(STDIN));

echo "Digite a terceira nota: ";
$nota3=trim(fgets(STDIN));  

$media = ($nota1+$nota2+$nota3)/3;
echo "A média é $media";