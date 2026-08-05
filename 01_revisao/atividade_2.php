<?php
$delta = ($b * $b) - (4 * $a * $c);
if ($delta < 0 ){
    echo"Não existem raízes reais.";
}elseif($delta == 0){
    $x = (-$b) / (2 * $a);
    echo"A unica raiz é :" . $x;
}else{
    $x1 = (-$b + sqrt($delta))/(2 * $a);
    $x2 = (- $b - sqrt($delta))/ (2 * $a);

    echo "Raiz 1:". $x1 . "<br>";
    echo "Raiz 2:". $x2;
}