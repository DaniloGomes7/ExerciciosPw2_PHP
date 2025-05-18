<?php

$numero = $_POST ["numero"];

$arredondado = round($numero);

if ($numero == $arredondado) {
    echo"$numero é um número INTEIRO.";
} else {
    echo"$numero é um número DECIMAL.";
}
?>