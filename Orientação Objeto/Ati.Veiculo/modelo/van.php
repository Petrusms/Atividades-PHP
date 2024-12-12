<?php
require_once("veiculos.php");
class van extends veiculos{
    private float $van = 2.1;
    public function valorViagem(){
        $resul = $this->valorAluguel+($this->van*$this->km);
        return (number_format($resul, 2, ",", "."));
    }

    public function getTipo(){
        return "van";
    }
}
?>
