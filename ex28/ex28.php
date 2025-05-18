<?php

$tipoCarne = $_POST['tipo'];
$quantidade = $_POST['quantidade'];
$pagamento = $_POST['pagamento'];

$file;
$alcatra;
$picanha;
$desconto;

if ($tipo == "file") {
    if ($quantidade <= 5) {
        $file = 4.90;
    } else {
        $file = 5.80;
    }
} else if ($tipo == "alcatra") {
    if ($quantidade <= 5) {
        $alcatra = 5.90;
    } else {
        $alcatra = 6.80;
    }
} else if ($tipo == "picanha") {
    if ($quantidade <= 5) {
        $picanha = 6.90;
    } else {
        $picanha = 7.80;
    }
} else {

    echo "Tipo de carne inválido! Escolha entre 'File', 'Alcatra' ou 'Picanha'. ";
}

$total = 0;

if ($tipo == 'file') {

    $total = $file * $quantidade;
} else if ($tipo == 'alcatra') {

    $total = $alcatra * $quantidade;
} else if ($tipo == 'picanha') {

    $total = $picanha * $quantidade;
}

$desconto = 0;

if ($pagamento == 'cartao') {

    $desconto = $total * 0.05;
}

$valortotal = $total - $desconto;

echo " CUPOM FISCAL <br>";
echo " Tipo de Carne: $tipo <br>";
echo " Quantidade:  $quantidade <br>";
echo " Preço total: R$ $valortotal <br>";

if ($pagamento == 'cartao') {

    echo "Total de desconto de 5%: R$  $desconto <br>";
} else {

    echo "Sem desconto no dinheiro! <br>";
}

echo "Valor Total da compra: R$ $valortotal <br>";
echo " FIM DO CUPOM FISCAL ";
