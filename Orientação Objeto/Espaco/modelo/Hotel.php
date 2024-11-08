<?php
require_once("Espaco.php");
class Hotel extends Espaco{
    private int $numEstrelas;
    private bool $cafeIncluso;


    public function getDadosHotel() {
        $dados = $this->getDadosEspaco();
        $dados .= " | Estrelas: " .$this->getNumEstrelas();
        $dados .= " | Café incluso: ".($this->cafeIncluso ? "Sim" : "Não")."\n";
        return $dados;
    }

    /**
     * Get the value of numEstrelas
     */
    public function getNumEstrelas(): int
    {
        return $this->numEstrelas;
    }

    /**
     * Set the value of numEstrelas
     */
    public function setNumEstrelas(int $numEstrelas): self
    {
        $this->numEstrelas = $numEstrelas;

        return $this;
    }

    /**
     * Get the value of cafeIncluso
     */
    public function isCafeIncluso(): bool
    {
        return $this->cafeIncluso;
    }

    /**
     * Set the value of cafeIncluso
     */
    public function setCafeIncluso(bool $cafeIncluso): self
    {
        $this->cafeIncluso = $cafeIncluso;

        return $this;
    }
}
?>
