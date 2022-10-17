<?php
$a = 0;
$b = 1;
$c = 0;
$cantidad = 7;
$suma = 0;

echo $a."-";
for($i=1;$i<=$cantidad;$i++){
    $c = $a + $b;
    echo $b."-";
    $a = $b;
    $suma += $b;
    $b = $c; 
}
    echo "La suma es: ".$suma;

?>