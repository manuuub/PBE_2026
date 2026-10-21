<?php
    class Paciente{
        private$nome;
        private$idade;
        private$peso;
        private$altura;

        public function __construct($nome,$idade,$peso, $altura = 0){
            $this->nome =$nome;
            $this->idade=$idade;
            $this->peso=$peso;
            $this->altura=$altura;
        }

        public function calcularIMC($peso){
            $this->peso <=100;
            $this->imc = $peso / ($altura ** 2);
        }

        public function classificarIMC(){
            $this->peso= 0;
            if($this->peso <=18){
                echo"Abaixo!";
            }
            elseif ($this->peso <=20) {
                echo"Peso normal!";
            }
            elseif($this->peso <=35){
                echo"Sobrepeso!";
            }else{
                echo"Obesidade!";
            }
        }
    }
    $exibirFicha = new Paciente ();

    $exibirFicha->calcularIMC();

    echo"<br>";

?>