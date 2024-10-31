<?php
require_once("Pessoa.php");
class Professor extends Pessoa {
        private float $salario;

        public function __toString()
        {
            $dados =  "Nome: ".$this->nome."\n";
            $dados .=  "Idade: ".$this->idade."\n";
            $dados .=  "RG: ".$this->rg."\n";
            $dados .=  "Matrícula: ".$this->getSalario()."\n";
            return $dados;
        }

        /**
         * Get the value of salario
         */
        public function getSalario(): float
        {
                return $this->salario;
        }

        /**
         * Set the value of salario
         */
        public function setSalario(float $salario): self
        {
                $this->salario = $salario;

                return $this;
        }
        }
?>