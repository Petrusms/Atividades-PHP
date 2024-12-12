<?php
require_once("veiculos.php");
class microOnibus extends veiculos{
    private float $microOnibus = 2.75;
    public function valorViagem(){
        $resul = $this->valorAluguel+($this->microOnibus*$this->km);
        return (number_format($resul, 2, ",", "."));
    }

    public function getTipo(){
        return "micro-õnibus";
    }
}
?>