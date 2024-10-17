<?php
require_once("IRadio.php");

class RadioPortatil implements IRadio{
    private string $cor;
    private string $marca;

    public function ligarRadio(){
        print("Rádio ligado.\n");
    }
    public function desligarRadio(){
        print("Rádio desligado.\n");
    }

    /**
     * Get the value of cor
     */
    public function getCor(): string
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     */
    public function setCor(string $cor): self
    {
        $this->cor = $cor;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca(): string
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca(string $marca): self
    {
        $this->marca = $marca;

        return $this;
    }
}
?>
