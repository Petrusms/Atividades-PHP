<?php

require_once("Estado.php");

class Cidade
{
    private string $nome;
    private string $qtdHabitantes;
    private $altitude;

    private Estado $estado;

    public function __toString()
    {
        $dados =  printf("A cidade de %s, localizada no estado %s-%s, possui %d habitantes e uma altitude de %d metros.\n",
        $this->nome, $this->estado->getNome(), $this->estado->getSigla(), $this->qtdHabitantes, $this->altitude);

        return $dados;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of qtdHabitantes
     */
    public function getQtdHabitantes(): string
    {
        return $this->qtdHabitantes;
    }

    /**
     * Set the value of qtdHabitantes
     */
    public function setQtdHabitantes(string $qtdHabitantes): self
    {
        $this->qtdHabitantes = $qtdHabitantes;

        return $this;
    }

    /**
     * Get the value of altitude
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Set the value of altitude
     */
    public function setAltitude($altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado(): Estado
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     */
    public function setEstado(Estado $estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}
?>
