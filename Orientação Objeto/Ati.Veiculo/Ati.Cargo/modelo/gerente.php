<?php
require_once("cargo.php");
class gerente extends cargo{
    public function getSalario(){
        $resul=$this->salarioBase*4.5;
        return (number_format($resul, 2, ",", "."));
    }

    public function getTipo(){
        return "gerente";
    }
}
?>