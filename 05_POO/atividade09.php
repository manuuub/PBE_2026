<?php
class Produto{
    private$nome;
    private$preco;
    private$estoque;

    public function __construct($nome,$preco,$estoque){
        $this-> nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }
    public function vender($quantidade){
        if($quantidade <= $this -> estoque){
            echo"Venda realizada com sucesso!";
        }else{
            echo"Estoque insuficiente.";
        }
    }
    public function reajustarPreco($percentual){
        $this -> preco += $this -> preco * ($percentual / 100);
    }
    public function exibirInfo (){
        echo"Nome:". $this ->nome . "<br>";
        echo"Preço:". $this ->preco  . number_format($this ->preco, 2,',','.') ."<br>";
        echo"Estoque:". $this ->estoque . "unidades" . "<br>";
    }
}
$produto = new Produto("Teclado Gamer", 250, 10);
$produto->vender(2);
$produto->reajustarPreco(10);
$produto->exibirInfo();
?>