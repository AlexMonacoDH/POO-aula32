<?php

class Gato{
        private $nome;
        private $humor;
        private $fome;
        private $energia;

        public function __construct($pnome,$phumor,$pfome,$penergia){
            $this->nome = $pnome;
            $this->humor = $phumor;
            $this->fome = $pfome;
            $this->energia = $penergia;
        }

        public function brincar(){
            echo $this->nome . ' está brincando.<br>-----<br>';
            $this->humor++;
            $this->fome++;
            $this->energia--;
        }

        public function dormir(){
            echo $this->nome . ' está dormindo.<br>-----<br>';
            $this->humor--;
            $this->fome++;
            $this->energia++;
        }

        public function comer(){
            echo $this->nome . ' está comendo.<br>-----<br>';
            $this->humor++;
            $this->fome--;
            $this->energia++;
        }

        public function mostrarEstado(){
            echo 'Nome: '.$this->nome .'<br>';
            echo 'Humor: '.$this->humor .'<br>';
            echo 'Fome: '.$this->fome .'<br>';
            echo 'Energia: '.$this->energia .'<br>==========<br>';
        }
    }

    $gato1 = new Gato('Brigadeiro',5,5,5);
    $gato1->mostrarEstado();
    $gato1->brincar();
    $gato1->mostrarEstado();
    $gato1->dormir();
    $gato1->mostrarEstado();
    $gato1->comer();
    $gato1->mostrarEstado();

?>