<?php  session_start();
include("conexion.php");
$correoelectronico=$_POST['correoelectronico'];
$password=$_POST['password'];
$sql="SELECT id,correoelectronico,nombres,nivel FROM usuario WHERE correoelectronico='$correoelectronico' AND password=sha1('$password')";
//echo $sql;
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {

    $fila=$resultado->fetch_assoc();
    $_SESSION['correoelectronico']=$correoelectronico;
    $_SESSION['nombres']=$fila['nombres'];
    $_SESSION['nivel']=$fila['nivel'];
    header("location:leer.php");

}
else
{
    echo "Usuario y/o Contraseña equivocados";
    ?>
    <meta http-equiv="refresh" content="4; url=login.html">
    <?php
}
?>