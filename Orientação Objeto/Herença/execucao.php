<?php
    require_once("modelo/Aluno.php");    
    require_once("modelo/Professor.php");    

    $aluno = new Aluno();
    $aluno->setNome(readline("Qual o seu nome?"));
    $aluno->setIdade(readline("Qual a sua idade?"));
    $aluno->setMatricula(readline("Qual a sua matricula?"));
    $aluno->setRg(readline("Informe seu RG?"));
    print($aluno);
    $aluno->getNomeIdade()."\n";
    
    $professor = new Professor();
    $professor->setNome(readline("Qual o seu nome?"));
    $professor->setIdade(readline("Qual a sua idade?"));
    $professor->setSalario(readline("Qual o seu salário?"));
    $professor->setRg(readline("Informe seu RG?"));
    print($professor);
?>