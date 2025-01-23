<?php
require_once("Cliente.php");
class ClientePJ extends Cliente{
    private string $razaoSocial;
    private string $CNPJ;

    public function getIdentificacao(){
        return $this->razaoSocial;
    }
    public function getNroDoc(){
        return $this->CNPJ;
    }
    public function getrTipo(){
        return "J";
    }


    /**
     * Get the value of razaoSocial
     */
    public function getRazaoSocial(): string
    {
        return $this->razaoSocial;
    }

    /**
     * Set the value of razaoSocial
     */
    public function setRazaoSocial(string $razaoSocial): self
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * Get the value of CNPJ
     */
    public function getCNPJ(): string
    {
        return $this->CNPJ;
    }

    /**
     * Set the value of CNPJ
     */
    public function setCNPJ(string $CNPJ): self
    {
        $this->CNPJ = $CNPJ;

        return $this;
    }
}
?>