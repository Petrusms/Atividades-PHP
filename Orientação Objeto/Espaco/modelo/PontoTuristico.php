<?php
require_once("Espaco.php");
class PontoTuristico extends Espaco{
    private string $duracaoDaVisita;
    
    public function getDadosPontoTuristico(){
        $dados = $this->getDadosEspaco();
        $dados .= " | Duração da Visita: ".$this->getDuracaoDaVisita()."\n";
        return $dados;
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
