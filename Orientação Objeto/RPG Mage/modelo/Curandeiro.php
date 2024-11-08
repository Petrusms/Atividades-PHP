<?php
require_once("Mago.php");
class Curandeiro extends Mago{
    private int $forcaCura;

    public function lancarPoder(){
        return "O mago ".$this->nome.", do tipo curandeiro, possui força de ".$this->forcaCura." e lançou o poder ".$this->poder->getDescricao()." com força total de ".$this->poder->getForcaTotal($this->forcaCura).".\n";
    }

    /**
     * Get the value of forcaCura
     */
    public function getForcaCura(): int
    {
        return $this->forcaCura;
    }

    /**
     * Set the value of forcaCura
     */
    public function setForcaCura(int $forcaCura): self
    {
        $this->forcaCura = $forcaCura;

        return $this;
    }
}
?>
