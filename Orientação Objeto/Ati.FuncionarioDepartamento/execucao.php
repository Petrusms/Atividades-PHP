<?php
require_once("modelo/Departamento.php");
require_once("modelo/Funcionario.php");

$dados = [];

for($i=0; $i<2; $i++){
    $depto = new Departamento();
    $funci = new Funcionario();

    $depto->setNome(readline("Qual o nome do seu departamento? \n"))
          ->setNumSala(readline("Qual o número da sua sala? \n"));

    $funci->setNome(readline("Qual o seu nome? \n"))
          ->setCargo(readline("Qual seu cargo? \n"))
          ->setSalario(readline("Qual o seu salario? \n"))
          ->setDepto($depto);

    $dados[] = $funci;
}

foreach($dados as $d){
    print("Nome: ". $d->getNome() ."\nCargo: ". $d->getCargo() ."\nSalário: ". $d->getSalario() ."R$\nNome Departamento: ". $d->getDepto()->getNome() ."\nNúmero da Sala: ". $d->getDepto()->getNumSala() ."\n");
}
?>
