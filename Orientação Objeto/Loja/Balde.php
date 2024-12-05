<?php
require_once("Produto.php");
class Balde extends Produto{
    private string $capacidade;

    public function getDados(){
        $dados = "\nDescrição Balde: ".$this->descricao;
        $dados.= "\nUnidade de medida: ".$this->uniMedida;
        $dados.= "\nCapacidade: ".$this->capacidade."\n";
        return $dados;
    }

    /**
     * Get the value of capacidade
     */
    public function getCapacidade(): string
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade(string $capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }
}
?>