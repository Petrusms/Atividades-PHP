<?php
class Emprestimo {
    private $material;
    private $pessoaDestino;

    public function __construct($material, $pessoaDestino) {
        $this->material = $material;
        $this->pessoaDestino = $pessoaDestino;
    }

    public function getMaterial() {
        return $this->material;
    }

    public function getPessoaDestino() {
        return $this->pessoaDestino;
    }
}
?>