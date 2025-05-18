<?php

$num1 = $_POST["valor1"];
$num2 = $_POST["valor2"];
$operacao = $_POST["op"];

if ($operacao === "A") {

    if ($num1 % 2 == 0) {
        echo "O número $num1 é pa <br>";
    } else {
        echo "O número $num1 é ímpar <br>";
    }

    if ($num2 % 2 == 0) {
        echo "O número $num2 é par <br>";
    } else {
        echo "O número $num2 é ímpar <br>";
    }
} elseif ($operacao === "B") {

    if ($num1 >= 0) {
        echo "O número $num1 é positivo <br>";
    } else {
        echo "O número $num1 é negativo <br>";
    }

    if ($num2 >= 0) {
        echo "O número $num2 é positivo <br>";
    } else {
        echo "O número $num2 é negativo <br>";
    }
} elseif ($operacao === "C") {

    if (floor($num1) == $num1) {
        echo "O número $num1 é inteiro <br>";
    } else {
        echo "O número $num1 é decimal <br>";
    }

    if (floor($num2) == $num2) {
        echo "O número $num2 é inteiro <br>";
    } else {
        echo "O número $num2 é decimal <br>";
    }
} else {
    echo "Erro: operação inválida.";
}
