<?php
class Conta{
    public$titular;
    public$numero;
    public$saldo;
    public$tipo;

function depositar($valor){
    $this ->saldo = $this ->saldo + $valor;
    echo"O saldo aumentou para $this ->saldo";
}
function sacar($valor){
    $this ->saldo = $this ->saldo + $valor;
    echo"O saldo resultou para $this ->saldo";
}
function consultarSaldo(){
    $this ->saldo = $this ->saldo + $valor;
    echo"O valor do saldo é de  $this ->saldo";
}
}

$Conta1 = new Conta();

    //Definindo os atributos!
$Conta1->titular = "Manuela";
$Conta1->numero = "20100";
$Conta1->saldo = "500";
$Conta1->tipo = "corrente";

echo"Titular: $Conta1->titular <br>";
echo "Numero: $Conta1->numero <br>";
echo"Saldo: $Conta1->saldo <br>";
echo"Tipo: $Conta1->tipo  <br>";

$Conta1->depositar(20);
$Conta1->sacar(10);
$Conta1->ConsultarSaldo();

$Conta2->titular = "Laura";
$Conta2->numero = "20300";
$Conta2->saldo = "400";
$Conta2->tipo = "polpança";

echo"Titular: $Conta2->titular <br>";
echo "Numero: $Conta2->numero <br>";
echo"Saldo: $Conta2->saldo <br>";
echo"Tipo: $Conta2->tipo  <br>";

$Conta1->depositar(10);
$Conta1->sacar(20);
$Conta1->ConsultarSaldo();
?>