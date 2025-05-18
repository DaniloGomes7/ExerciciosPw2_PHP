<?php
    $valor = $_POST ["valor"];

    if($valor > 0){
        echo "O numero $valor é positivo";
    }else if($valor < 0){
        echo "O numero $valor é negativo";
    }else{
        "O numero $valor é neutro";
    }
?>