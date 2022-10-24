<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php session_start();
$_SESSION['valorUno'] = $_GET['numeroUno'];
$_SESSION['valorDos'] = $_GET['numeroDos'];

?>    
<ul>
<li><a href="resultado.php?operacion=sumar">Sumar</a></li>
<li><a href="resultado.php?operacion=restar">Restar</a></li>
</ul>


</body>
</html>