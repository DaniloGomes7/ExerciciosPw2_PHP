<?php
$valor1 = $_POST ["primeiroValor"];
$valor2 = $_POST ["segundoValor"];
$valor3 = $_POST ["terceiroValor"];

if(($valor1 > $valor2) && ($valor1 > $valor3) ){
    echo"O primeiro valor ( $valor1 ) é o maior !";
    
}else if(($valor2 > $valor1) && ($valor2 > $valor3)){
   echo"O segundo valor ( $valor2 ) é o maior !";

}else if(($valor3 > $valor1) && ($valor3 > $valor2)){
    echo"O terceiro valor ( $valor3 ) é o maior !";
}else{
    echo"Os Valores digitados são iguais !";
}

?>