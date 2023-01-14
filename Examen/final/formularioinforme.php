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
$mes = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
?>
    <form action="insertar.php" method="post">
        <div>
            <label for="mes">Mes: </label>
            <select name="mes" id="mes">
            <?php
            for ($i=1; $i<=12; $i++) {
            if ($i == date('m'))
            echo '<option value="'.$i.'"selected>'.$mes[($i)-1].'</option>';
            else
            echo '<option value="'.$i.'">'.$mes[($i)-1].'</option>';
            }
            ?>
            </select>
        </div>

        <div>
            SIS256 <input type="radio" name="materia">
            SIS258 <input type="radio" name="materia">
            SIS406 <input type="radio" name="materia">
        </div>

        <div>
            <input type="text" name="porcentaje" id="porcentaje">
        </div>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>