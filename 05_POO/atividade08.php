<?php
class Funcionario{
    private$nome;
    private$saldo;

    public function __construct($nome, $saldo = 1000){
        $this->nome = $nome;
        $this->saldo =$saldo;
    }
    public function aumentarSalario($percentual){
        if($porcential > 0 && $percentual <=10){
            $total_aumento = $this->salario * ($percentual/100);
            $this->salario = $this ->salario + $total_aumento;
        }else{
            echo"Percentural de aumento incorreto,o valor precisa estar entre 0 e 10";
        }
   } 
}
    public function exibirSalario(){
    echo"Funcionário: $this->nome - Salario R$" . number_format($this ->salario, 2,',','.');
}
$func = new Funcionario("Karlos",3000);
$func->aumentarSalario(10);
$func->exibirSalario();
?>