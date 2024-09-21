<?php
class Turma
{
    private string $nome;
    private string $curso;

    private array  $array;

    public function add(Aluno $aluno){
        array_push($this->array, $aluno);
    }

    public function __construct()
    {
        $this->array = array(); 
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
     * Get the value of curso
     */
    public function getCurso(): string
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     */
    public function setCurso(string $curso): self
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get the value of array
     */
    public function getArray(): array
    {
        return $this->array;
    }

    /**
     * Set the value of array
     */
    public function setArray(array $array): self
    {
        $this->array = $array;

        return $this;
    }
}
?>
