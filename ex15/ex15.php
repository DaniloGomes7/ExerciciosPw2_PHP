<?php
$lado1 = $_POST["ladoTriangulo1"];
$lado2 = $_POST["ladoTriangulo2"];
$lado3 = $_POST["ladoTriangulo3"];


if ($lado1 == $lado2 && $lado1 == $lado3) {
    echo "O triângulo é Equilátero";
} else if ($lado1 == $lado2 && $lado1 != $lado3 || $lado1 == $lado3 && $lado1 != $lado2 || $lado2 ==  $lado3 && $lado2 != $lado1) {
    echo "O triângulo é Isósceles";
} else {
    echo "O triangulo é Escaleno";
}
