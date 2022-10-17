<?php
$a = 7;
$b = 5;
$c = 10;

if($a >= $b && $a >= $c){
    echo "El mayor es: ".$a;
}
else if($b >= $a && $a >= $c){
    echo "El mayor es: ".$b;
}
else{
    echo "El mayor es: ".$c;
}
?>