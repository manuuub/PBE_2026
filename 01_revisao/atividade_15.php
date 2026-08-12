<?php
$produtos =[
    ["nome" => "Camisa basica","preço" =>45.90],
    ["nome" => "Tenis Esportivo","preço" =>250.00],
    ["nome" => "Boné","preço" =>39.90],
    ["nome" => "Calça Jens","preço" =>120.00],
    ["nome" => "Meia","preço" =>15.00]
];

foreach($produtos as $produto){
    if($produto["preco"]< 100){
        echo"Produto:" . $produto["nome"] ."--------" . $produto["preco"] . "<br>"   
 }
}