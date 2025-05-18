<?php

$valor = $_POST["valor"];


if ($valor < 10 || $valor > 600) {
    echo " O valor inserido não é válido. ";
}

//CLEITAO essa parte do cod tive que dar uma pesquisada, se puder me dar uma auxiliada em questao desse 'INTDIV', agradeço.
$notas100 = intdiv($valor, 100);
$valor %= 100;

$notas50 = intdiv($valor, 50);
$valor %= 50;

$notas10 = intdiv($valor, 10);
$valor %= 10;

$notas5 = intdiv($valor, 5);
$valor %= 5;

$notas1 = $valor;

if ($notas100 > 0) {
    echo "$notas100 nota(s) de 100 reais, ";
}
if ($notas50 > 0) {
    echo "$notas50  nota(s) de 50 reais, ";
}
if ($notas10 > 0) {
    echo "$notas10 nota(s) de 10 reais, ";
}
if ($notas5 > 0) {
    echo "$notas5 nota(s) de 5 reais,";
}
if ($notas1 > 0) {
    echo "$notas1 nota(s) de 1 real.";
}
