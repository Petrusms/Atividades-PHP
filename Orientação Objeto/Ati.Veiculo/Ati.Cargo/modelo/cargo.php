<?php
abstract class cargo{
    protected int $salarioBase = 1500;
    protected string $nome;

    abstract public function getSalario();
    abstract public function getTipo();

    public function __toString(){
        return "O funcionário ".$this->nome.", cargo ".$this->getTipo().", possui salário de R$ ".$this->getSalario().".\n ";
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
}
?>