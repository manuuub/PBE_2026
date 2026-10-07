<?php

class Livro{
    public$titulo;
    public$autor;
    public$paginas;
    public$ano_publicacao;
   
    public function __construct($titulo,$autor,$paginas,$ano_publicacao = "Desconhecido"){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->ano_publicacao = $ano_publicacao;
    }

    public function exibirDetalhes(){
        echo"Titulo: $this->titulo , Autor: $this->autor , Páginas: $this->paginas , Publicação: $this->ano_publicacao";
        echo"<hr>";
    }
}
$livro = new Livro("programação", "Leonardo",200,2026 );
$livro->exibirDetalhes();

$livro2 = new Livro("HTML", "Leonardo",10);
$livro2->exibirDetalhes();
?>