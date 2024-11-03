<?php
require_once("Automoveis.php");
class Onibus extends Automoveis{
    private int $qtdPassageiros;
    private int $pesoMax;

    public function getDados(){
        return "Modelo: ".$this->modelo."\nVelocidade Máxima: ".$this->velocidadeMax.
                "Km/h\nCor: ".$this->cor."\nQuantidade de Passageiros: ".$this->getQtdPassageiros()."\nPeso máximo: ".$this->getPesoMax()."Kg\n";
    }

    /**
     * Get the value of qtdPassageiros
     */
    public function getQtdPassageiros(): int
    {
        return $this->qtdPassageiros;
    }

    /**
     * Set the value of qtdPassageiros
     */
    public function setQtdPassageiros(int $qtdPassageiros): self
    {
        $this->qtdPassageiros = $qtdPassageiros;

        return $this;
    }

    /**
     * Get the value of pesoMax
     */
    public function getPesoMax(): int
    {
        return $this->pesoMax;
    }

    /**
     * Set the value of pesoMax
     */
    public function setPesoMax(int $pesoMax): self
    {
        $this->pesoMax = $pesoMax;

        return $this;
    }
}
?>
