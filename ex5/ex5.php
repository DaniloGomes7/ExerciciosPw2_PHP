<?php
    $primeiraNota = $_POST ["nota1"];
    $segundaNota  = $_POST ["nota2"];

    $mediaFinal = ($primeiraNota + $segundaNota) /2 ;

    if(($mediaFinal >= 7 ) && ($mediaFinal < 9)) {
    echo"Aprovado";
} else if($mediaFinal < 7){
    echo"Reprovado";
} else if($mediaFinal == 10)
    echo"Aprovado com Distinção";
?>