<?php
    class Automoveis{
        protected string $modelo;
        protected string $cor;
        protected int $velocidadeMax;

        public function __construct($modelo, $cor, $velocidadeMax) {
            $this->modelo = $modelo;
            $this->cor = $cor;
            $this->velocidadeMax = $velocidadeMax;
        }
        /**
         * Get the value of modelo
         */
        public function getModelo(): string
        {
                return $this->modelo;
        }

        /**
         * Set the value of modelo
         */
        public function setModelo(string $modelo): self
        {
                $this->modelo = $modelo;

                return $this;
        }

        /**
         * Get the value of cor
         */
        public function getCor(): string
        {
                return $this->cor;
        }

        /**
         * Set the value of cor
         */
        public function setCor(string $cor): self
        {
                $this->cor = $cor;

                return $this;
        }

        /**
         * Get the value of VelocidadeMax
         */
        public function getVelocidadeMax(): int
        {
                return $this->velocidadeMax;
        }

        /**
         * Set the value of VelocidadeMax
         */
        public function setVelocidadeMax(int $velocidadeMax): self
        {
                $this->velocidadeMax = $velocidadeMax;

                return $this;
        }
    }
?>