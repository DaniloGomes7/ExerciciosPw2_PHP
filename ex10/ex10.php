<?php

$turno = $_POST ["Turnos"];

if ($turno == "M") {
    echo"Bom Dia!";
} else if ($turno == "V") {
    echo"Boa Tarde!";
} else if ($turno == "N") {
    echo"Boa Noite!";
}else{
    echo"Turno inexistente";
}
?>

