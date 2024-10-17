<?php
require_once("IRadio.php");
require_once("IRelogio.php");

class RadioRelogio implements IRadio, IRelogio{

    private string $corTela;

    public function ligarRadio(){
        print("Rádio relógio ligado.\n");
    }
    public function desligarRadio(){
        print("Rádio relógio desligado.\n");
    }
    public function mostrarHoras(){
        echo date("H:m:s\n");
    }

    /**
     * Get the value of corTela
     */
    public function getCorTela(): string
    {
        return $this->corTela;
    }

    /**
     * Set the value of corTela
     */
    public function setCorTela(string $corTela): self
    {
        $this->corTela = $corTela;

        return $this;
    }
}
    
?>
