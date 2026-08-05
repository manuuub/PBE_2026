<?php
$arr = ["Manuela"=> 10,
        "Laura"  => 9 ,
        "Noemi"  => 8
];
 echo "<pre>";
 print_r($arr);
 echo"</pre>";
foreach ($arr as $posicao => $valor ){
    echo"posição <strong>".$posicao."</strong>  texto <strong>".$valor. "</strong>";
    echo"</br>";
}

?>