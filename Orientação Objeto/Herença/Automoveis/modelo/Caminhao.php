<?php
    require_once("Automoveis.php");
    class Caminhao extends Automoveis{
        private int $qtdCarga;
        private int $altura;

        public function getDados(){
            return "Modelo: ".$this->modelo."\nVelocidade Máxima: ".$this->velocidadeMax.
                    "Km/h\nCor: ".$this->cor."\nQuantidade de Carga: ".$this->getQtdCarga()."T\nAltura: ".$this->getAltura()."m";
        }

        /**
         * Get the value of qtdCarga
         */
        public function getQtdCarga(): int
        {
                return $this->qtdCarga;
        }

        /**
         * Set the value of qtdCarga
         */
        public function setQtdCarga(int $qtdCarga): self
        {
                $this->qtdCarga = $qtdCarga;

                return $this;
        }

        /**
         * Get the value of altura
         */
        public function getAltura(): int
        {
                return $this->altura;
        }

        /**
         * Set the value of altura
         */
        public function setAltura(int $altura): self
        {
                $this->altura = $altura;

                return $this;
        }
    }
?>
