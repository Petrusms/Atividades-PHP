<?php
require_once("Produto.php");
class Livro extends Produto{
    private string $autor;

    public function getDados(){
        $dados = "\nDescrição Livro: ".$this->descricao;
        $dados.= "\nUnidade de medida: ".$this->uniMedida;
        $dados.= "\nAutor: ".$this->autor;
        return $dados;
    }

    /**
     * Get the value of autor
     */
    public function getAutor(): string
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }
}
?>