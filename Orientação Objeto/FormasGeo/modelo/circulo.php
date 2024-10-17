<?php
require_once("IFormaGeo.php");

class circulo implements IFormaGeo{
    private int $raio;
    
    public function getArea(){
        return 3.14*$this->raio*$this->raio;
    }
    public function getDesenho(){
        $desenho = 
        "    ****    \n".
        "  **    **  \n".
        " **      ** \n".
        "**        **\n".
        " **      ** \n".
        "  **    **  \n".
        "    ****    \n";

        return $desenho;
    }

    /**
     * Get the value of raio
     */
    public function getRaio(): int
    {
        return $this->raio;
    }

    /**
     * Set the value of raio
     */
    public function setRaio(int $raio): self
    {
        $this->raio = $raio;

        return $this;
    }
}
?>
