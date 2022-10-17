<?php
$cantidad = 7;
$suma = 0;

for($i=1;$i<=$cantidad;$i++){
    echo $i."-";
    $suma += $i;
}

echo "La sumatoria es: ".$suma;
?>