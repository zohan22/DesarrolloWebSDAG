<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$numeroUno = $_GET['numeroUno'];
$numeroDos = $_GET['numeroDos'];
setcookie("valorUno", $numeroUno, 0);
setcookie("valorDos", $numeroDos, 0);
?>    
<ul>
<li><a href="resultado.php?operacion=sumar">Sumar</a></li>
<li><a href="resultado.php?operacion=restar">Restar</a></li>
</ul>


</body>
</html>