<?php
require_once("Espaco.php");
class Restaurante extends Espaco{
    private string $tipoFood;

    public function getDadosRestaurante(){
        return "Nome: ".$this->nome." | Endereço: ".$this->endereco." | Tipo da Comida: ".$this->getTipoFood()."\n";
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