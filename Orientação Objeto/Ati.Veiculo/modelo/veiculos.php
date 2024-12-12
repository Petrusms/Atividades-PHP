<?php
abstract class veiculos{
    protected $valorAluguel;
    protected $km;
    
    abstract function valorViagem();
    abstract function getTipo();

    /**
     * Get the value of valorAluguel
     */
    public function getValorAluguel()
    {
        return $this->valorAluguel;
    }

    /**
     * Set the value of valorAluguel
     */
    public function setValorAluguel($valorAluguel): self
    {
        $this->valorAluguel = $valorAluguel;

        return $this;
    }

    /**
     * Get the value of km
     */
    public function getKm()
    {
        return $this->km;
    }

    /**
     * Set the value of km
     */
    public function setKm($km): self
    {
        $this->km = $km;

        return $this;
    }
}
?>