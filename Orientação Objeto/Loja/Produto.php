<?php
class Produto{
    protected string $descricao;
    protected string $uniMedida;

    public function getDados(){
        $dados = "\nDescrição Produto: ".$this->descricao;
        $dados.= "\nUnidade de medida: ".$this->uniMedida;
        return $dados;
    }


    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of uniMedida
     */
    public function getUniMedida(): string
    {
        return $this->uniMedida;
    }

    /**
     * Set the value of uniMedida
     */
    public function setUniMedida(string $uniMedida): self
    {
        $this->uniMedida = $uniMedida;

        return $this;
    }
}
?>