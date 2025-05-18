<?php

$salario = $_POST["valorganho"];

$valorAumento20 = ($salario * 20) / 100;
$valorAumento15 = ($salario * 15) / 100;
$valorAumento10 = ($salario * 10) / 100;
$valorAumento05 = ($salario *  5) / 100;

$reajuste20 = $salario + $valorAumento20;
$reajuste15 = $salario + $valorAumento15;
$reajuste10 = $salario + $valorAumento10;
$reajuste05 = $salario + $valorAumento05;

if ($salario <= 280.00) {
    echo "Sálario antes do reajuste: R$  $salario \n
        porcentual do aumento foi de 20% 
        O valor do aumento foi de R$ + $valorAumento20 \n
        Novo salario: R$ $reajuste20";
} else if ($salario >= 280.00 && $salario < 700.00) {
    echo "Sálario antes do reajuste: R$  $salario \n
        porcentual do aumento foi de 15% 
        O valor do aumento foi de R$ + $valorAumento15 \n
        Novo salario: R$ $reajuste15";
} else if ($salario >= 700.00 && $salario < 1500.00) {
    echo "Sálario antes do reajuste: R$  $salario \n
        porcentual do aumento foi de 10% 
        O valor do aumento foi de R$ + $valorAumento10 \n
        Novo salario: R$ $reajuste10";
} else if ($salario > 1500.00) {
    echo "Sálario antes do reajuste: R$  $salario \n
        porcentual do aumento foi de 5% 
        O valor do aumento foi de R$ + $valorAumento05 \n
        Novo salario: R$ $reajuste05";
} else {
    echo "Informe um sálario válido";
}
