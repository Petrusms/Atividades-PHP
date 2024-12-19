<?php
require_once("cargo.php");
class estagiario extends cargo{
    public function getSalario(){
        $resul=$this->salarioBase*0.8;
        return (number_format($resul, 2, ",", "."));
    }
    public function getTipo(){
        return "estágiario";
    }
}
?>