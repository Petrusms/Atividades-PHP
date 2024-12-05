<?php
require_once("Midia.php");
class DVD extends Midia{
    public function getTipo($midia){
        return "DVD | Descrição: ".$midia->getDescricao()." | Preço: ".$midia->getPrecoPago()."\n";
    }
}
?>