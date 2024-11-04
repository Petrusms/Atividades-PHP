<?php
require("modelo/PFisica.php");
require("modelo/PJuridica.php");

$pessoas = [];

function excluir(&$pessoas) { 
    if (empty($pessoas)) {
        print("Não há pessoas cadastradas para você remover!\n");
        return;
    }
    
    print("Qual desses você quer remover? \n");
    listar($pessoas);

    $encontrado = false;
    while($encontrado = true){
        $nome = readline("Para excluir informe o nome: ");
        $tipo = readline("\nInforme o CPF ou CNPJ: ");
        
        foreach ($pessoas as $index => $dado) {
            if($dado instanceof PFisica)
                if ($dado->getNome() === $nome && $dado->getCpf() === $tipo){
                    array_splice($pessoas, $index, 1);
                    print("Removido com sucesso!\n");
                    $encontrado = true;
                    break;
                }
        }
        foreach ($pessoas as $index => $dado) {
            if($dado instanceof PJuridica)
                if ($dado->getNome() === $nome && $dado->getCnpj() === $tipo){
                    array_splice($pessoas, $index, 1);
                    print("Removido com sucesso!\n");
                    $encontrado = true;
                    break;
                }
        }
        print("Valor não encontrado!!!\n");
    }
}

function listar($pessoas){
    if (empty($pessoas)) {
        print("Não há pessoas cadastradas para você remover!\n");
        return;
    }
    print("Pessoas fisicas: \n");
    foreach($pessoas as $pessoa){
        if($pessoa instanceof PFisica){
            print($pessoa->getNome()." - Idade: ".$pessoa->getIdade()." - CPF: ".$pessoa->getCpf()."\n");
        } 
    }
    print("Pessoas juridicas: \n");
    foreach($pessoas as $pessoa){
        if($pessoa instanceof PJuridica){
            print($pessoa->getNome()." - Nome fantasia: ".$pessoa->getNomeFatasia()." - CNPJ: ".$pessoa->getCnpj()."\n");
        } 
    }
}

while(true){
    print("O que deseja fazer?\n");
    print("1: Cadastrar Pessoa fisica\n");
    print("2: Cadastrar Pessoa juridica\n");
    print("3: Listar\n");
    print("4: Excluir\n");
    $num=readline("0: Encerrar o pragrama\n");

    switch($num){
        case 1:
            $pessoa = new PFisica();
            $pessoa->setNome(readline("Qual o seu nome?"))->setIdade(readline("Qual sua idade?"));
            $pessoa->setCpf(readline("Qual seu CPF?"));
            array_push($pessoas, $pessoa);
            break;
            
        case 2:
            $pessoa = new PJuridica();
            $pessoa->setNome(readline("Qual o seu nome?"));
            $pessoa->setNomeFatasia(readline("Qual seu nome de fanatasia?"));
            $pessoa->setCnpj(readline("Qual seu CNPJ?"));
            array_push($pessoas, $pessoa);
            break;

        case 3:
                listar($pessoas);
                break;
        
        case 4: 
                excluir($pessoas);
                break;
        case 0:
            print("Programa encerrado...");
            return true;
        
        default: 
            print("Opção invalida!\n");

    }
}
?>
