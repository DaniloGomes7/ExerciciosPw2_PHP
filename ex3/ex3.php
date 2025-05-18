<?php
    $Sexo = $_POST ["caixaSexo"];

    if($Sexo == "M"){
        echo"Seu sexo é masculino";
    }else if ($Sexo == "F"){
        echo"Seu sexo é feminino";
    }else{
        echo"Sexo invalido";
    }
?>
