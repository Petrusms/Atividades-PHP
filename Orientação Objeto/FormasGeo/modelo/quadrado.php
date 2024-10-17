<?php
require_once("IFormaGeo.php");

class quadrado implements IFormaGeo{
    private int $lado;
        
    public function getArea(){
        return $this->lado*$this->lado;
    }
    public function getDesenho(){
        $desenho = 
        "******\n".
        "*    *\n".
        "*    *\n".
        "******\n";

        return $desenho;
    }
    
    /**
     * Get the value of lado
     */
    public function getLado(): int
    {
        return $this->lado;
    }

    /**
     * Set the value of lado
     */
    public function setLado(int $lado): self
    {
        $this->lado = $lado;

        return $this;
    }
}
?>
