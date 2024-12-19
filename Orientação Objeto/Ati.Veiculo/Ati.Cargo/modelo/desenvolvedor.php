<?php
require_once("cargo.php");
class desenvolvedor extends cargo{
    public function getSalario(){
        $resul=$this->salarioBase*2.3;
        return (number_format($resul, 2, ",", "."));
    }

    public function getTipo(){
        return "desenvolvedor";
    }
}
?>