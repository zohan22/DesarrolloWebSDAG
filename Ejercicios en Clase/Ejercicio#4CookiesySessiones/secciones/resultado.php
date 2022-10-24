<?php
$valorUno = $_COOKIE['valorUno'];
$valorDos = $_COOKIE['valorDos'];
$operacion = $_GET['operacion'];

if($operacion == "sumar"){
    $resultado = $valorUno + $valorDos;
    echo "El resultado de la suma es: $resultado";
}
else{
    $resultado = $valorUno - $valorDos;
    echo "El resultado de la resta es: $resultado";
}
?>