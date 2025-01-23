<?php
require_once("Cliente.php");
class ClientePF extends Cliente{
    private string $nome;
    private string $CPF;

    public function getIdentificacao(){
        return $this->nome;
    }
    public function getNroDoc(){
        return $this->CPF;
    }
    public function getrTipo(){
        return "F";
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
     * Get the value of CPF
     */
    public function getCPF(): string
    {
        return $this->CPF;
    }

    /**
     * Set the value of CPF
     */
    public function setCPF(string $CPF): self
    {
        $this->CPF = $CPF;

        return $this;
    }
}
?>