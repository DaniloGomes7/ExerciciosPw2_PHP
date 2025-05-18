<?php

$diaSemana = $_POST ["diadaSemana"];

if($diaSemana == "1"){
    echo"Hoje é Segunda";
}else if ($diaSemana == "2"){
    echo"Hoje é Terça";
}else if ($diaSemana == "3"){
    echo"Hoje é Quarta";
}else if ($diaSemana == "4"){
    echo"Hoje é Quinta";
}else if ($diaSemana == "5"){
    echo"Hoje é Sexta";
}else if ($diaSemana == "6"){
    echo"Hoje é Sabado";
}else if ($diaSemana == "7"){
    echo"Hoje é Domingo";
}
?>