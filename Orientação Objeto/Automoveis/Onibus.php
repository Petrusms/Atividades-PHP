<?php
require_once("Automoveis.php");
class CarroPasseio extends Automoveis{
    private int $qtdPassageiros;
    private int $pesoMax;

    public function getDados(){
        return "Modelo: ".$this->modelo."\nVelocidade Máxima: ".$this->velocidadeMax.
                "Cor: ".$this->cor."\nQuantidade de Passageiros: ".$this->getQtdPassageiros()."\nPeso máximo: ".$this->getPesoMax();
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