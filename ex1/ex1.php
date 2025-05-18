<?php

$valor1 = $_POST["numero1"];
$valor2 = $_POST["numero2"];

if($valor1 > $valor2) {
    echo "O numero $valor1 é maior que o numero $valor2";
}else if($valor1 < $valor2) {
    echo "O numero $valor2 é maior que o numero $valor1";
}else{
    echo "Os numeros sao iguais: $valor2 ";
}

?>