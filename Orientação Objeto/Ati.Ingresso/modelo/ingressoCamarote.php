<?php
require_once("ingressoVip.php");
class ingressoCamarote extends ingressoVip{
    private float $valorAdiconalCamarote;

    public function getValorTotal() {
        $valorVip = parent::getValorTotal();
        $resul = $this->valorAdiconalCamarote + $valorVip;
        return number_format($resul, 2, ",", ".");
    }

    /**
     * Get the value of valorAdiconalCamarote
     */
    public function getValorAdiconalCamarote(): float
    {
        return $this->valorAdiconalCamarote;
    }

    /**
     * Set the value of valorAdiconalCamarote
     */
    public function setValorAdiconalCamarote(float $valorAdiconalCamarote): self
    {
        $this->valorAdiconalCamarote = $valorAdiconalCamarote;

        return $this;
    }
}
?>
