<?php
$filas = $_GET['filas'];
$columnas = $_GET['columnas'];
$fraseUno = array("VIVA","MI","SUCRE");
$fraseDos = array("CUNA","DE","LIBERTAD");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td{
            border: 1px solid black;
            color: black;
            border-collapse: collapse;
        }

        table{
            width: 50%;
        }

        td{
            height: 70px;
        }

        .rojo{
            background-color: red;
        }

        .amarillo{
            background-color: yellow;
        }

        .verde{
            background-color: green;
        }
    </style>
</head>
<body>
    <table>
        <?php
        for($i=0; $i<=$filas-1; $i++){
        ?>
        <tr>
            <?php
            for($j=0; $j<=$columnas-1; $j++){
                if($j%2==0){
                    if($i%2==0){
            ?>
                <td class="rojo">
                    <?php
                    echo $fraseUno[$i % 3];
                    ?>
                </td>
                <?php
                }
                else{
                ?>
                <td class="verde">
                <?php
                    echo $fraseUno[$i % 3];
                    ?>
                </td>
                <?php
                }
                ?>
                <?php
                if($i%2==1){
                ?>
                    <td class="amarillo">
                    <?php
                    echo $fraseDos[$i % 3];
                    ?>
                    </td>
                <?php
                }
                else{
                ?>
                    <td class="verde">
                    <?php
                    echo $fraseDos[$i % 3];
                    ?>
                    </td>
                <?php    
                }
                ?>
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