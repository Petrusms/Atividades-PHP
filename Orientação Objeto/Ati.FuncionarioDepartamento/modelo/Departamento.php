<?php
class Departamento{
    private string $nome;
    private int $NumSala;

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
     * Get the value of NumSala
     */
    public function getNumSala(): int
    {
        return $this->NumSala;
    }

    /**
     * Set the value of NumSala
     */
    public function setNumSala(int $NumSala): self
    {
        $this->NumSala = $NumSala;

        return $this;
    }
}
?>
