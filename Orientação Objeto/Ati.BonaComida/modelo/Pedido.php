<?php
require_once("Prato.php");
class Pedido{
    private string $nomeCli;
    private string $nomeGarcom;
    private Prato $prato;

    /**
     * Get the value of nomeCli
     */
    public function getNomeCli(): string
    {
        return $this->nomeCli;
    }

    /**
     * Set the value of nomeCli
     */
    public function setNomeCli(string $nomeCli): self
    {
        $this->nomeCli = $nomeCli;

        return $this;
    }

    /**
     * Get the value of nomeGarcom
     */
    public function getNomeGarcom(): string
    {
        return $this->nomeGarcom;
    }

    /**
     * Set the value of nomeGarcom
     */
    public function setNomeGarcom(string $nomeGarcom): self
    {
        $this->nomeGarcom = $nomeGarcom;

        return $this;
    }

    /**
     * Get the value of prato
     */
    public function getPrato(): Prato
    {
        return $this->prato;
    }

    /**
     * Set the value of prato
     */
    public function setPrato(Prato $prato): self
    {
        $this->prato = $prato;

        return $this;
    }
}
?>
