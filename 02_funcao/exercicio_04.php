<?php
function analisarNotas ($nota1, $nota2 ,$nota3){
    $media  = ($nota1 + $nota2 + $nota3)/3;
    $notas = [$nota1, $nota2, $nota3];
    $maior = $notas [0];
    $menor = $notas [0];

    foreach($notas as $nota){
        if ($nota > $maior){
            $maior = $nota;
        }
    else{
        $menor = $nota;
    }
    
    }
}
?>