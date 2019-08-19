<?php

    class Pessoa{
        private $nome;
        private $idade;
        private $cor;
        private $sexo;

        public function __construct($pnome,$pidade,$pcor,$psexo){
            $this->nome = $pnome;
            $this->idade = $pidade;
            $this->cor = $pcor;
            $this->sexo = $psexo;
        }

        public function dormir(){
            echo $this->nome . ' falou: Comecei a dormir...<br>';
        }

        public function comer(){
            echo $this->nome . ' falou: Comida!!!...<br>';
        }

        public function falar($texto){
            echo $this->nome . ' falou: ' . $texto . '<br>';
        }
    }

    $p1 = new Pessoa('Zwipp','19','branca','M');
    $p2 = new Pessoa('Ana Livia','19','branca','F');
    $p1->dormir();
    $p2->dormir();

?>