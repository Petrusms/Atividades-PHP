<?php
require_once("calculadora.php");
class resto extends calculadora{
    public function calcular(){
        return $this->numA%$this->numB;
    }
}
?>