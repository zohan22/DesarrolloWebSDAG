<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tabla{
            width: 700px;
            heigth: 600px;
            border: 3px solid black
        }
        table{
            width:90%;
            margin:20px 10px 20px 30px;  
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

        .materia{
            background-color: yellow;
            text-align:center;
        }
    </style>
</head>
<body>
<?php
include("conexion.php");
$sql = "SELECT id,materia,dia,hora FROM horarios";
$consulta = mysqli_query($con,$sql);
$fila = mysqli_fetch_array($consulta);
?>
<div class="tabla">
<table>
    <tr>
        <th>Hora</th>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miercoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
    </tr>
    <tr>
        <th>8-9</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th>9-10</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th>10-11</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th>11-12</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th>12-13</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th>13-14</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th>14-15</th>
        <td rowspan="2" class="materia">
            SIS258
            <?php 
                if(($fila['id'] == 5) && ($fila['materia'] == "SIS258")){
                    echo "SIS258";
                }
                else{
                    echo "";
                } 
            ?>
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th>15-16</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th>16-17</th>
        <td></td>
        <td></td>
        <td></td>
        <td rowspan="2" class="materia">
            SIS258
            <?php 
                if(($fila['id'] == 5) && ($fila['materia'] == "SIS258")){
                    echo "SIS258";
                }
                else{
                    echo "";
                } 
            ?>
        </td>
        <td></td>
    </tr>
    <tr>
        <th>17-18</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>


</table>
</div>
</body>
</html>