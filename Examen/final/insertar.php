<?php
include("conexion.php");

$mes = $_POST['mes'];
$materia = $_POST['materia'];
$porcentaje = $_POST['porcentaje'];


$sql = "INSERT INTO informes(materia,mes,porcentaje) VALUES ('$mes','$materia','$porcentaje')";
mysqli_query($con,$sql);

?>
<p>SE INSERTO CON EXITO</p>
<meta http-equiv="refresh" content="2;url=formularioinforme.php">
