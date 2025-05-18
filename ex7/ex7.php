<?php
$valor1 = $_POST["primeiroValor"];
$valor2 = $_POST["segundoValor"];
$valor3 = $_POST["terceiroValor"];

if ($valor1 > $valor2 && $valor1 > $valor3 && $valor2 < $valor1 && $valor2 < $valor3) {
    echo "O maior número é $valor1 e o menor número é o  $valor2";
} else if ($valor1 > $valor2 && $valor1 > $valor3 && $valor3 < $valor1 && $valor3 < $valor2) {
    echo "O maior número é $valor1 e o menor número é o $valor3";
} else if ($valor2 > $valor1 && $valor2 > $valor3 && $valor1 < $valor2 && $valor1 < $valor3) {
    echo "O maior número é $valor2 e o menor número é o $valor1";
} else if ($valor2 > $valor1 && $valor2 > $valor3 && $valor3 < $valor2 && $valor3 < $valor1) {
    echo "O maior número é $valor2 e o menor número é o $valor3";
} else if ($valor3 > $valor1 && $valor3 > $valor2 && $valor1 < $valor2 && $valor1 < $valor3) {
    echo "O maior número é  $valor3 e o menor número é o $valor1 ";
} else if ($valor3 > $valor1 && $valor3 > $valor2 && $valor2 < $valor1 && $valor2 < $valor3) {
    echo "O maior número é  $valor3 e o menor número é o $valor2";
} else {
    echo "Os Valores digitados são iguais !";
}
