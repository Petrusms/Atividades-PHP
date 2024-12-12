<?php
require_once("veiculos.php");
class carro extends veiculos{
    private float $carro = 1.5;
    public function valorViagem(){
        $resul = $this->valorAluguel+($this->carro*$this->km);
        return (number_format($resul, 2, ",", "."));
    }

    public function getTipo(){
        return "carro";
    }
}
?>