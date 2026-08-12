<?php
$idade = "15";
$acompanhar = true;

if ($idade >= 18){
    echo"Entrada liberada! A pessoa pode entrar sozinha.";
}elseif($idade >= 14 && $idade <=17){
    echo"Entrada liberada apenas com acompanhante";
} else {
    echo"Entrada negada!Menores de 14 e 17 anos só com acompanhante";
} 
?>