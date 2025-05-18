<?php

$telefonouParaVitima = $_POST["telefonou"];
$esteveNoLocal = $_POST["esteve"];
$moraPerto = $_POST["mora"];
$deviaVitima = $_POST["devia"];
$trabalhouComVitima = $_POST["trabalhou"];

$somaRespostas = 0;

if ($telefonouParaVitima == "sim") $somaRespostas++;
if ($esteveNoLocal == "sim") $somaRespostas++;
if ($moraPerto == "sim") $somaRespostas++;
if ($deviaVitima == "sim") $somaRespostas++;
if ($trabalhouComVitima == "sim") $somaRespostas++;

if ($somaRespostas == 2) {
    $classificacao = "Suspeita";
} else if ($somaRespostas >= 3 && $somaRespostas <= 4) {
    $classificacao = "Cúmplice";
} else if ($somaRespostas == 5) {
    $classificacao = "Assassino";
} else {
    $classificacao = "Inocente";
}

echo "Classificação: $classificacao";

?>