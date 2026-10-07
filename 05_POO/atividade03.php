<?php
class Aula{
    public$disciplina;
    public$professor;
    public$duracao;
    public$n_sala;
    public$bloco;

function exibirInformacoes(){
    echo"Disciplina:  $this->disciplina <br>";
    echo"Professor:  $this->professor <br>";
    echo"Duração:  $this->duracao <br>";
    echo"Numero da Sala:  $this->n_sala <br>";
    echo"Bloco:  $this->bloco <br>";
    
}
function trocarProfessor($nome_professor){
    $this -> professor = $nome_professor;
    echo"O novo professor é ".$this ->nome_professor." <br>";
}
function alterarLocal($n_sala,$bloco){
    $this->n_sala = $novo_numero_sala;
    $this->bloco = $novo_bloco;
    echo"Local alterado.<br>";
    echo"Nova sala: ".$this->n_sala."<br>";
    echo"Novo bloco:".$this->novo_bloco."<br>";
}
}

   //Objetos!
$aula1 = new Aula();

    //Definindo os atributos!
$aula1->diciplina = "programação";
$aula1->professor = "Leonardo";
$aula1->duracao = 4;
$aula1->n_sala = 2;
$aula1->bloco = "Anexo";
echo"<hr>";
$aula1->exibirInformacoes();
echo"<hr>";
$aula1->trocarProfessor("Gabriel");
echo"<hr>";
$aula1->alterarLocal("B",10);
echo"<hr>";
$aula1->exibirInformacoes();
  
$aula2->diciplina = "programação";
$aula2->professor = "Gabriel";
$aula2->duracao = 4;
$aula2->n_sala = 2;
$aula2->bloco = "Anexo";
echo"<hr>";
$aula1->exibirInformacoes();
echo"<hr>";
$aula1->trocarProfessor("Leonardo");
echo"<hr>";
$aula1->alterarLocal("B",10);
echo"<hr>";
$aula1->exibirInformacoes();
?>