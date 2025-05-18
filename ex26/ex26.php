<?php
$litros = $_POST["litros"];
$tipo = $_POST["tipo"];

$a = 3.90;
$g = 5.50;

$desconto;
$preco;


if ($tipo == "A") {
    $preco = $a;
    if ($litros <= 20) {
        $desconto = 0.03 * $litros * $preco;
    } else {
        $desconto = 0.05 * $litros * $preco;
    }
} else if ($tipo == "g") {
    $preco = $g;
    if ($litros <= 20) {
        $desconto = 0.04 * $litros * $preco;
    } else {
        $esconto = 0.06 * $litros * $preco;
    }
} else {
    echo "Tipo de combustivel invalido";
}
$total = ($litros * $preco) - $desconto;
echo "O valor a ser pago é R$ $total";
