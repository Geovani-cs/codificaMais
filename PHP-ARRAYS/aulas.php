<?

// calculo de IMC

echo "Digite a sua altura: ";
$altura = trim(fgets(STDIN));

echo "Digite o seu peso: ";
$peso = trim(fgets(STDIN));

$imc = $peso / $altura ** 2;

if ( $imc < 18.5){
    $resposta = "abaixo";
}elseif ( $imc < 25) {
    $resposta = "dentro";
}else {
    $resposta = "acima";
}
echo "O seu IMC é de $imc, e você está $resposta do seu peso. ";

