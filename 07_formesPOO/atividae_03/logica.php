<?php

require_once "Funcionario.php";

$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$horasExtras = $_POST['horasExtras'];
$valeTransporte = $_POST['valeTransporte'];

$funcionario = new Funcionario(
    $nome,
    $cargo,
    $horasExtras,
    $valeTransporte
);

include "view_relatorio.php";
?>