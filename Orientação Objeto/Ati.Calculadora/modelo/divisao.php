<?php
require_once("calculadora.php");
class divisao extends calculadora{
    public function calcular(){
        return $this->numA/$this->numB;
    }
}
?>