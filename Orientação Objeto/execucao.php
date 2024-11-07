<?php
require_once("modelo/Hotel.php");
require_once("modelo/Restaurante.php");
require_once("modelo/PontoTuristico.php");

$espacos = [];

function excluir($espacos) { 
    if (empty($espacos)) {
        print("Não há pessoas cadastradas para você remover!\n");
        return;
    }
    
    print("Qual desses você quer remover? \n");
    listar($espacos);

    $encontrado = false;
    while($encontrado){
        $tipo = readline("Qual  o tipo do local que deseja remover?(Restaurante, Hotel ou Ponto Turistico)");
            if($tipo === "Restaurante" || $tipo === "restaurante"){
                $nome = readline("Para excluir informe o nome do Restaurante: ");
                $tipo = readline("\nQual o tipo de comida?");
            }else if($tipo === "Hotel" || $tipo === "hotel"){
                $nome = readline("Para excluir informe o nome do Hotel: ");
            $tipo = readline("\nQual o número de estrelas?");
            }else if($tipo === "Ponto Turistico" || $tipo === "ponto turistico"){
                $nome = readline("Para excluir informe o nome do Ponto Turistico: ");
                $tipo = readline("\nQuanto tem durou a visitação do Ponto Turistico?");
            }else{
                print("O que você digitou não se encaixa em nada!!!");
            }
        
        foreach ($espacos as $index => $dado) {
            if($dado instanceof Restaurante){
                if ($dado->getNome() === $nome && $dado->getTipoFood() === $tipo){
                    array_splice($espacos, $index, 1);
                    print("Removido com sucesso!\n");
                    $encontrado = true;
                    return $espacos;
                    break;
                }
            } elseif($dado instanceof Hotel){
                if ($dado->getNome() === $nome && $dado->getNumEstrelas() === $tipo){
                    array_splice($espacos, $index, 1);
                    print("Removido com sucesso!\n");
                    $encontrado = true;
                    return $espacos;
                    break;
                }
            } elseif($dado instanceof PontoTuristico){
                if ($dado->getNome() === $nome && $dado->getDuracaoDaVisita() === $tipo){
                    array_splice($espacos, $index, 1);
                    print("Removido com sucesso!\n");
                    $encontrado = true;
                    return $espacos;
                    break;
                }
            } else{
                print("O que você digitou não se encaixa em nada!!!");
            }
        }
        print("Valor não encontrado!!!\n");
    }
}

function listar($espacos){
    if (empty($espacos)) {
        print("Não há espaços cadastradas para você remover!\n");
        return;
    }
    print("Objetos da classe Restaurante: \n");
    foreach($espacos as $espaco){
        if($espaco instanceof Restaurante){
            print($espaco->getDadosRestaurante());
        } 
    }
    print("Objetos da classe Hotel: \n");
    foreach($espacos as $espaco){
        if($espaco instanceof Hotel){
            print($espaco->getDadosHotel());
        } 
    }
    print("Objetos da classe Ponto Turistico: \n");
    foreach($espacos as $espaco){
        if($espaco instanceof PontoTuristico){
            print($espaco->getDadosPontoTuristico());
        } 
    }
}

while(true){
    print("╔════════════════════════╗\n");
    print("║   O que deseja fazer?  ║\n");
    print("║ 1: Cadastrar Espaço    ║\n");
    print("║ 2: Excluir Espaço      ║\n");
    print("║ 3: Listar Espaços      ║\n");
    print("║ 0: Encerrar o pragrama ║\n");
    print("╚════════════════════════╝\n");
    $num=readline("");

    switch($num){
        case 1:
            print("╔═══════════════════════════╗\n");
            print("║   Qual o tipo do espaço?  ║\n");
            print("║ 1: Restaurante            ║\n");
            print("║ 2: Hotel                  ║\n");
            print("║ 3: Ponto Turistico        ║\n");
            print("╚═══════════════════════════╝\n");
            $tipo = readline("");
            switch($tipo){
                case 1:
                    $espaco = new Restaurante();
                    $espaco->setNome(readline("Qual o nome do Restaurante?"));
                    $espaco->setEndereco(readline("Qual o enderço do Restaurante?"));
                    $espaco->setTipoFood(readline("Qual o tipo de comida?"));
                    array_push($espacos, $espaco);
                    break;

                case 2:
                    $espaco = new Hotel();
                    $espaco->setNome(readline("Qual o nome do Hotel?"));
                    $espaco->setEndereco(readline("Qual o enderço do Hotel?"));
                    $espaco->setNumEstrelas(readline("Qual o número de estrelas?"));
                    $espaco->setCafeIncluso(readline("Tem café incluso?(Responda com Sim ou Não!!)"));
                    break;

                case 3:
                    $espaco = new PontoTuristico();
                    $espaco->setNome(readline("Qual o nome do Ponto Turistico?"));
                    $espaco->setEndereco(readline("Qual o enderço do Ponto Turistico?"));
                    $espaco->setDuracaoDaVisita(readline("Quanto tem durou a visitação do Ponto Turistico?"));
                    break;
            }
            break;
            
        case 2:
            excluir($espacos);
            break;

        case 3:
            listar($espacos);
            break;
        
        case 0:
            print("Programa encerrado...");
            return true;
        
        default: 
            print("Opção invalida!\n");
    }
}
?>