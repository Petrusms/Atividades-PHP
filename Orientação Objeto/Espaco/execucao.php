
<?php
require_once("modelo/Hotel.php");
require_once("modelo/Restaurante.php");
require_once("modelo/PontoTuristico.php");

$espacos = [];

function excluir($espacos) { 
    if (empty($espacos)) {
        print("Não há espaços cadastrados para você remover!\n");
        return;
    }
    
    listar($espacos);

    while (true) {
        $tipo = readline("Qual o tipo do local que deseja remover? (Restaurante, Hotel ou Ponto Turistico) ");
        
        if ($tipo === "Restaurante" || $tipo === "restaurante") {
            $nome = readline("Para excluir informe o nome do Restaurante: ");
            $tipoComida = readline("Qual o tipo de comida? ");
        } elseif ($tipo === "Hotel" || $tipo === "hotel") {
            $nome = readline("Para excluir informe o nome do Hotel: ");
            $numEstrelas = readline("Qual o número de estrelas? ");
        } elseif ($tipo === "Ponto Turistico" || $tipo === "ponto turistico") {
            $nome = readline("Para excluir informe o nome do Ponto Turistico: ");
            $duracaoVisita = readline("Quanto durou a visitação do Ponto Turistico? ");
        } else {
            print("O que você digitou não se encaixa em nada!!!\n");
            continue;
        }

        $encontrado = false; 

        foreach ($espacos as $index => $dado) {
            if ($dado instanceof Restaurante) {
                if ($dado->getNome() === $nome && $dado->getTipoFood() === $tipoComida) {
                    array_splice($espacos, $index, 1);
                    print("Removido com sucesso!\n");
                    return $espacos;
                    $encontrado = true;
                    break;
                }
            } elseif ($dado instanceof Hotel) {
                if ($dado->getNome() === $nome && $dado->getNumEstrelas() === $numEstrelas) { 
                    array_splice($espacos, $index, 1);
                    print("Removido com sucesso!\n");
                    return $espacos;
                    $encontrado = true;
                    break;
                }
            } elseif ($dado instanceof PontoTuristico) {
                if ($dado->getNome() === $nome && (string)$dado->getDuracaoDaVisita() === (string)$duracaoVisita) { 
                    array_splice($espacos, $index, 1);
                    print("Removido com sucesso!\n");
                    return $espacos;
                    $encontrado = true;
                    break;
                }
            }
        }

        if (!$encontrado) {
            print("Valor não encontrado!!!\n");
        }
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

                    $stop = true;
                    while($stop){
                        $tipo = readline("Tem café incluso?(Responda com Sim ou Não!!)\n");
                        if($tipo === "Sim" || $tipo === "sim"){
                            $espaco->setCafeIncluso(true);
                            $stop = false;
                        }else if($tipo === "Não" || $tipo === "não"){
                            $espaco->setCafeIncluso(false);
                            $stop = false;
                        }else{
                            print("É Sim ou Não!!!\n");
                        }
                    }
                    array_push($espacos, $espaco);
                    break;

                case 3:
                    $espaco = new PontoTuristico();
                    $espaco->setNome(readline("Qual o nome do Ponto Turistico?"));
                    $espaco->setEndereco(readline("Qual o enderço do Ponto Turistico?"));
                    $espaco->setDuracaoDaVisita(readline("Quanto tem durou a visitação do Ponto Turistico?"));
                    array_push($espacos, $espaco);
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
