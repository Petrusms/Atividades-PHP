<?php
require_once("IFormaGeo.php");

class retangulo implements IFormaGeo{
    private int $base;
    private int $altura;

    public function getArea(){
        return $this->base*$this->altura;
    }
    public function getDesenho(){
        $desenho = 
        "************\n".
        "*          *\n".
        "*          *\n".
        "*          *\n".
        "************\n";

        return $desenho;
    }

    /**
     * Get the value of base
     */
    public function getBase(): int
    {
        return $this->base;
    }

    /**
     * Set the value of base
     */
    public function setBase(int $base): self
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura(): int
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura(int $altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}
?>
