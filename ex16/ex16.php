<?php

$valorA = $_POST["valor1"];
$valorB = $_POST["valor2"];
$valorC = $_POST["valor3"];
$valorDelta = $valorA * 2 + $valorB * +$valorC;


if ($valorA  == 0) {
    echo "A equação não é do segundo grau";
} else if ($valorDelta == 0) {
    echo "A equação possui apenas uma raiz real";
} else if ($valorDelta > 0) {
    echo "A equação possui duas raízes reais";
} else {
    echo "A equação não possui raízes reais";
}
