<?php

$nome = $_POST['Nome'];
echo "Nome: $nome <br>";
$salarioBruto = $_POST['salarioBruto'];
echo "Salário Bruto:R$ $salarioBruto <br>";
$horaExtra = $_POST['horaExtra'];
$beneficio = $_POST['beneficio'];
$desconto = $_POST['desconto'];

    $valor_hora = $salarioBruto/160;
    $valor_hora_exrtra = $valor_hora*1.5;
    $total_horas_extras = $horaExtra*$valor_hora;
    echo"Horas Extras: $total_horas_extras  <br>";

    $salario_bruto_sem_desconto = 
    $salario_bruto_sem_desconto = $salarioBruto + $total_horas_extras + $beneficio;
   if($salario_bruto_sem_desconto > 5000){
    $imposto = $salario_bruto_sem_desconto * 0.10;
   }elseif ($salario_bruto_sem_desconto >=3000) {
    $imposto = $salario_bruto_sem_desconto * 0.05;
   }else{
    $imposto = 0;
   }
$salario_liquido = $salario_bruto_sem_desconto - $imposto;
$status = ($salario_liquido > 4000) "Bem remunerado" : "Médio";

echo"Salário Bruto + Total com horas Exatras + Beneficios : R$  $salario_bruto_sem_desconto";
echo "Descontos: R$  $desconto <br>";
echo "Imposto Aplicado: R$  $imposto <br>";
echo "Salário Líquido: R$  $salario_liquido <br>";
echo "Status:  $status <br>";
?>