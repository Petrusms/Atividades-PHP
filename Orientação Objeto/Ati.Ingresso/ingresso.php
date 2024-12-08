<?php
class ingresso{
    protected float $valor;

    public function getValorTotal() {
        return (number_format($this->valor, 2, ",", "."));
    }

    /**
     * Get the value of valor
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}
?>