<?php
$morango = $_POST['morango'];
$maca = $_POST['maca'];

$precomorango;
$precomaca;
$desconto;

if($morango> 8 || $precomorango > 25.00){
$precomorango = $morango * 2.20;
$desconto = $precomorango * 0.10;

}else if ($morango < 8){

$precomorango = $morango * 2.50;

}else if($maca > 8 || $precomaca > 25.00){

$precomaca = $maca * 1.50;
$desconto = $precomaca * 0.10;

}else{

$precomaca = $macakg * 1.80;

}

echo"O valor total pago do morango R$ $precomorango <br>";
echo"O valor total pago da maçã R$ $precomaca <br>";
?>