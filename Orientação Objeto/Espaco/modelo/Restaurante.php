<?php
require_once("Espaco.php");
class Restaurante extends Espaco{
    private string $tipoFood;

    public function getDadosRestaurante(){
        $dados = $this->getDadosEspaco();
        $dados .= " | Tipo da Comida: ".$this->getTipoFood()."\n";
        return $dados;
    }

    /**
     * Get the value of tipoFood
     */
    public function getTipoFood(): string
    {
        return $this->tipoFood;
    }

    /**
     * Set the value of tipoFood
     */
    public function setTipoFood(string $tipoFood): self
    {
        $this->tipoFood = $tipoFood;

        return $this;
    }
}
?>
