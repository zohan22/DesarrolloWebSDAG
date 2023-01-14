<?php
include("conexion.php");
$sql = "SELECT id,nombres_apellidos, calificacion FROM alumnos";

$consulta = mysqli_query($con,$sql);
$i=1;
?>

<table>
    <tr>
        <th>Nro</th>
        <th>Nombres y Apellidos</th>
        <th>Calificacion</th>
        <th>Operaciones</th>
    </tr>
<?php
while($fila = mysqli_fetch_array($consulta))
{
?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $fila["nombres_apellidos"] ?></td>
        <td><?php echo $fila["calificacion"] ?></td>
        <td>
        <a href="editarcalificaciones.php?id=<?php echo $fila["id"]; ?>"><img src="images/editar.png" alt="Editar"> Editar</a>
        </td>
    </tr>
<?php
}
?>
</table>
