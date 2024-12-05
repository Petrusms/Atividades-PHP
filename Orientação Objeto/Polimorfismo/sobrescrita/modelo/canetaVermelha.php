<?php
require_once("canetaAzul.php");
class canetaVermelha extends canetaAzul{
    public function escrever(){
        print("Caneta escrevendo cor vermelha!!\n");
    }

    public function escreverEspec(){
        $this->escrever();
    }

    public function escreverPai(){
        parent::escrever();
    }
}
?>