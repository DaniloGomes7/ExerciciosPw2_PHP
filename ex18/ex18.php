<?php

$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];

if ($dia > 1 && $dia < 31 && $mes >= 1 && $mes <= 12 && $ano > 1) {
    echo "A data é válida";
} else {
    echo "A data é inválida";
}
