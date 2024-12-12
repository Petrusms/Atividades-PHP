<?php
require_once("calculadora.php");
class soma extends calculadora{
    public function calcular(){
        return $this->numA+$this->numB;
    }
}
?>