<?php
require_once("calculadora.php");
class multiplicacao extends calculadora{
    public function calcular(){
        return $this->numA*$this->numB;
    }
}
?>