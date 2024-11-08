<?php
require_once("Mago.php");
class Combatente extends Mago{
    private int $forcaAtq;

    public function lancarPoder(){
        return "O mago ".$this->nome.", do tipo combatente, possui força de ".$this->forcaAtq." e lançou o poder ".$this->poder->getDescricao()." com força total de ".$this->poder->getForcaTotal($this->forcaAtq).".\n";
    }

    /**
     * Get the value of forcaAtq
     */
    public function getForcaAtq(): int
    {
        return $this->forcaAtq;
    }

    /**
     * Set the value of forcaAtq
     */
    public function setForcaAtq(int $forcaAtq): self
    {
        $this->forcaAtq = $forcaAtq;

        return $this;
    }
}
?>
