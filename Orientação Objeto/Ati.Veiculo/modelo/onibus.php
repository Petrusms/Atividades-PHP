<?php
require_once("veiculos.php");
class onibus extends veiculos{
    private float $onibus = 4.2;
    public function valorViagem(){
        $resul = $this->valorAluguel+($this->onibus*$this->km);
        return (number_format($resul, 2, ",", "."));
    }

    public function getTipo(){
        return "õnibus";
    }
}
?>