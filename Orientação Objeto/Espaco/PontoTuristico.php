<?php
require_once("Espaco.php");
class PontoTuristico extends Espaco{
    private string $duracaoDaVisita;
    
    public function getDadosPontoTuristico(){
        return "Nome: ".$this->nome." | Endereço: ".$this->endereco." | Duração da Visita: ".$this->getDuracaoDaVisita()."\n";
    }

    /**
     * Get the value of diracaoDaVisita
     */
    public function getDuracaoDaVisita(): string
    {
        return $this->duracaoDaVisita;
    }

    /**
     * Set the value of diracaoDaVisita
     */
    public function setDuracaoDaVisita(string $duracaoDaVisita): self
    {
        $this->duracaoDaVisita = $duracaoDaVisita;

        return $this;
    }
}
?>
