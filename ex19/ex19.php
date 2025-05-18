<?php

$numero = $_POST["numero"];
$centena = $numero / 100;
$dezena =  ($numero%100) /10;
$unidade = $numero%10;


if($numero >= 0 && $numero <= 1000 ){
    
    echo "O numero é: $numero  <br> Centenas: $centena <br> Dezenas: $dezena <br> Unidades: $unidade";
}else{
    echo "Número inválido";
}
?>