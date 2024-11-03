<?php
    require_once("Automoveis.php");
    class CarroPasseio extends Automoveis{
        private int $qtdPassageiros;

        public function getDados(){
            return "Modelo: ".$this->modelo."\nVelocidade Máxima: ".$this->velocidadeMax.
                    "Km/h\nCor: ".$this->cor."\nQuantidade de Passageiros: ".$this->getQtdPassageiros()."\n";
        }

        /**
         * Get the value of qtdPassageiros
         */
        public function getQtdPassageiros(): int
        {
                return $this->qtdPassageiros;
        }

        /**
         * Set the value of qtdPassageiros
         */
        public function setQtdPassageiros(int $qtdPassageiros): self
        {
                $this->qtdPassageiros = $qtdPassageiros;

                return $this;
        }
    }
?>
