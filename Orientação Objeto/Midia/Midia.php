<?php
class Midia{
    protected string $descricao;
    protected float $precoPago;

    public function getDados(){
        $dados = "Descrição: ".$this->descricao;
        $dados = " | ".$this->precoPago;
        return $dados;
    }
    public function getTipo($midia){
        return "Sem tipo";
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of precoPago
     */
    public function getPrecoPago(): float
    {
        return $this->precoPago;
    }

    /**
     * Set the value of precoPago
     */
    public function setPrecoPago(float $precoPago): self
    {
        $this->precoPago = $precoPago;

        return $this;
    }
}
?>