<?php

$valor1 = $_POST["Valor1"];
$valor2 = $_POST["Valor2"];
$valor3 = $_POST["Valor3"];


if ($valor1 < $valor2 && $valor1 < $valor3 && $valor2 > $valor1 && $valor2 < $valor3 && $valor3 > $valor1 && $valor3 > $valor2) {
    echo "$valor3, $valor2, $valor1";
} else if ($valor1 < $valor2 && $valor1 < $valor3 && $valor3 > $valor1 && $valor3 < $valor2 && $valor2 > $valor1 && $valor2 > $valor3) {
    echo "$valor2, $valor3, $valor1";
} else if ($valor2 < $valor1 && $valor2 < $valor3 && $valor1 > $valor2 && $valor1 < $valor3 && $valor3 > $valor2 && $valor3 > $valor1) {
    echo "$valor3, $valor1, $valor2";
} else if ($valor2 < $valor1 && $valor2 < $valor3 && $valor3 > $valor2 && $valor3 < $valor1 && $valor1 > $valor2 && $valor1 > $valor3) {
    echo "$valor1, $valor3, $valor2";
} else if ($valor3 < $valor1 && $valor3 < $valor2 && $valor2 > $valor3 && $valor2 < $valor1 && $valor1 > $valor2 && $valor1 > $valor3) {
    echo "$valor1, $valor2, $valor3";
} else if ($valor3 < $valor1 && $valor3 < $valor2 && $valor1 > $valor3 && $valor1 < $valor2 && $valor2 > $valor3 && $valor2 > $valor1) {
    echo "$valor3, $valor1, $valor3";
} else {
    echo "$valor1, $valor2, $valor3";
}
