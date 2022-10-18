<?php
$filas = $_POST["filas"];
$columnas = $_POST["columnas"];
$contador = 1;
?>
<table border="1">
<?php
for($i=0;$i<$filas;$i++){
?>
<tr border="1">
<?php
    for($j=0;$j<$columnas;$j++){
?>
    <td border="1">
        <?php
            echo $contador++;
        ?>
    </td>
<?php
    }
?>
    </tr>
<?php
}
?>
</table>