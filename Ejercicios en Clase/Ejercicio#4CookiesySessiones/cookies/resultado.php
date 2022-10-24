<?php session_start();
$valorUno = $_SESSION['valorUno']
$valorDos = $_SESSION['valorDos'];
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