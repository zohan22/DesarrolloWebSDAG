<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilosTabla.css">
</head>
<body>
<?php
    $filas = $_POST["filas"];
    $columnas = $_POST["columnas"];
?>
<table style="border: 1px solid black; border-collapse: collapse; ">
<?php
    for($i=$filas; $i>=0; $i--){
?>
        <tr style="border: 1px solid black;">
<?php
        for($j=$columnas; $j>=0; $j--){
            if($i == 0 && $j == 0){
            ?>
                <td style="border: 1px solid black; background-color:red; width: 25px; height: 20px"></td>
            <?php
            }else if($i == 0){
            ?>
                <td style="border: 1px solid black; background-color:red; color: white; width: 25px; height: 20px"><?php echo $j; ?></td>
            <?php
            }else if($j == 0){
            ?>
                <td style="border: 1px solid black; background-color:red; color: white; width: 25px; height: 20px"><?php echo $i; ?></td>
            <?php
            }else{
            ?>
                <td style="border: 1px solid black;"><?php echo $j*$i; ?></td>
            <?php
            }
?>
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
