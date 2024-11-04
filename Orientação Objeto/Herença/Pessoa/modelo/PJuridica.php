<?php
require_once("pessoa.php");
class PJuridica extends pessoa{
    private string $nomeFatasia;
    private string $cnpj;

    /**
     * Get the value of nomeFatasia
     */
    public function getNomeFatasia(): string
    {
        return $this->nomeFatasia;
    }

    /**
     * Set the value of nomeFatasia
     */
    public function setNomeFatasia(string $nomeFatasia): self
    {
        $this->nomeFatasia = $nomeFatasia;

        return $this;
    }

    /**
     * Get the value of cnpj
     */
    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     */
    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }
}
?>
