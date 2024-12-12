<?php
abstract class midia{
    private string $nome;
    private float $preco;

    
    public function __toString()
    {
        return $this->getTipo().") ".$this->nome."-".$this->preco."\n";
    }

    public abstract function
        getTipo();

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
     * Get the value of preco
     */
    public function getPreco(): float
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     */
    public function setPreco(float $preco): self
    {
        $this->preco = $preco;

        return $this;
    }
}
?>
