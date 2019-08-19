<?php

    class Carro{
        private $placa;
        private $qtdCombustivel;
        private $rendimento;
        private $capacidade;

    public function __construct($pPlaca,$pqtdCombustivel,$pRendimento,$pCapacidade){
        $this->placa = $pPlaca;
        $this->qtdCombustivel = $pqtdCombustivel;
        $this->rendimento = $pRendimento;
        $this->capacidade = $pCapacidade;
    }

    public function andar($nQuilomentros){
        $this->qtdCombustivel -= $this->rendimento;
    }

    public function abastecer($nLitros){
        $this->qtdCombustivel += $nLitros;
    }

    public function calcularAutonomia(){
        return $this->qtdCombustivel * $this->rendimento;
    }

    public function mostrarEstado(){
        echo 'Carro '.$this->placa. ' :<br>';
        echo $this->qtdCombustivel.' litros no tanque<br>';
    }
}

    $carro1 = new Carro('POO-1111',50,10,50);
    $carro1->andar(20);
    $carro1->mostrarEstado();
    $carro1->calcularAutonomia();
    $carro1->abastecer(3);
    $carro1->mostrarEstado();
?>