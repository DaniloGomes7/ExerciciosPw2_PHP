<?php

$produto1 = $_POST["prodValor1"];
$produto2 = $_POST["prodValor2"];
$produto3 = $_POST["prodValor3"];


if ($produto1 < $produto2 && $produto1 < $produto3) {
    echo "Produto 1 é o item mais barato custando R$ $produto1";
} else if ($produto2 < $produto1 && $produto2 < $produto3) {
    echo "Produto 2 é o item mais barato custando R$ $produto2";
} else if ($produto3 < $produto1 && $produto3 < $produto2) {
    echo "Produto 3 é o item mais barato custando R$ $produto3";
} else {
    echo "Todos os preços são iguais !";
}
