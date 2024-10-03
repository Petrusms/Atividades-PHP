<?php 
class Prato {
    private int $num;
    private string $nome;
    private float $valor;

    public function __construct($num, $nome, $valor)
    {
        $this->num = $num;
        $this->nome = $nome;
        $this->valor = $valor;
    }
    /**
     * Get the value of num
     */
    public function getNum(): int
    {
        return $this->num;
    }

    /**
     * Set the value of num
     */
    public function setNum(int $num): self
    {
        $this->num = $num;

        return $this;
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
     * Get the value of valor
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}
?>
