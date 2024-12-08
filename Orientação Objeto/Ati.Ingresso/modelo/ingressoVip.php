<?php
require_once("ingresso.php");
class ingressoVip extends ingresso{
    private float $valorAdiconal;

    public function getValorTotal() {
        $resul = $this->valor + $this->valorAdiconal;
        return (number_format($resul, 2, ",", "."));
    }

    /**
     * Get the value of valorAdiconal
     */
    public function getValorAdiconal(): float
    {
        return $this->valorAdiconal;
    }

    /**
     * Set the value of valorAdiconal
     */
    public function setValorAdiconal(float $valorAdiconal): self
    {
        $this->valorAdiconal = $valorAdiconal;

        return $this;
    }
}
?>
