<?php
    require_once("Pessoa.php");
    class Aluno extends Pessoa {
        private int $matricula;

        public function __toString()
        {
            $dados =  "Nome: ".$this->nome."\n";
            $dados .=  "Idade: ".$this->idade."\n";
            $dados .=  "RG: ".$this->rg."\n";
            $dados .=  "Matrícula: ".$this->getMatricula()."\n";
            return $dados;
        }

        /**
         * Get the value of matricula
         */
        public function getMatricula(): int
        {
                return $this->matricula;
        }

        /**
         * Set the value of matricula
         */
        public function setMatricula(int $matricula): self
        {
                $this->matricula = $matricula;

                return $this;
        }
    }
?>