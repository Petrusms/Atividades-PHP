<?php
require_once("calculadora.php");
class subtracao extends calculadora{
    public function calcular(){
        return $this->numA-$this->numB;
    }
}
?>