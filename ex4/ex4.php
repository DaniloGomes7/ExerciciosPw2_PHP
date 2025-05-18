<?php
    $letra = $_POST ["alfabeto"];

    if (($letra == "A") || ($letra == "a") || ($letra == "E") || ($letra == "e") ||
        ($letra == "I") || ($letra == "i")  || ($letra == "O") || ($letra == "o") ||
        ($letra == "U") || ($letra == "u"))  {
        echo"A letra digitada é uma vogal";
    }else{
        echo"A letra digitada é uma consoante";
    }
?>