<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .tablita{
        width:50%; 
    }
    table,tr,td,th{
    border: 1px solid black;
    border-collapse: collapse;
    }

    th{
    color: black;
    font-weight: bolder;
    background-color: #0077b6;
    }
    td,th{
    padding: 5px;
    text-align: center;
    }
    </style>
</head>
<body>
<?php
include("conexion.php");
$sql = "SELECT id,fotografia,materia,nombres_apellidos FROM alumnos WHERE materia = 'SIS256'";
$consulta = mysqli_query($con,$sql);
$cuadros = $_GET['cuadros'];


?>

<table class="tablita">
    <tr>
        <th>Imagen</th>
        <th>Nombres y Apellidos</th>
        <?php
        for($i = 1; $i <= $cuadros; $i++){
        ?>
        <th>Cuadro <?php echo $i; ?></th>
        <?php
        }
        ?>
    </tr>
<?php
while($fila = mysqli_fetch_array($consulta))
{
?>
    <tr>
        <td>
            <?php if($fila["fotografia"] != "");{?>
            <img width="70px" height="70px" src="images/<?php echo $fila["fotografia"]?>" alt="">
            <?php
            }
            ?>
        </td>
        <td><?php echo $fila["nombres_apellidos"] ?></td>
        
        <?php
        for($i = 1; $i <= $cuadros; $i++){
        ?>
        <td></td>
        <?php
        }
        ?>
    </tr>
<?php
}
?>
</table>
</body>
</html>