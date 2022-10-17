<?php
$lado = 3;
for($f = 0; $f < $lado; $f++){ //for para filas
    for($c = 0; $c < $lado*3; $c++){ //for para columnas
        if(($f == 0) || ($c == 0) || ($f == $lado-1) || ($c == $lado-1)){
            echo " *";
        }
        else{
            echo "";
        }
    }
    echo "<br>";
}



?>