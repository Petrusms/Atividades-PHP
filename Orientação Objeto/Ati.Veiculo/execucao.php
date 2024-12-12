<?php
require_once("modelo/carro.php");
require_once("modelo/van.php");
require_once("modelo/microOnibus.php");
require_once("modelo/onibus.php");

while(true){
    print("Escolhas um desses veículos:\n");
    print("1: Carro\n");
    print("2: Van\n");
    print("3: Micro-Õnibus\n");
    print("4: Õnibus\n");
    print("0: Encerrar programa\n");
    $num = readline("");

    $veiculo = null;
    switch($num){
        case 1:
            $veiculo = new carro();
            break;

        case 2: 
            $veiculo = new van();
            break;

        case 3: 
            $veiculo = new microOnibus();
            break;

        case 4:
            $veiculo = new onibus();
            break;
        
        case 0:
            print("Programa encerrado...\n");
            return true;
            
        default: 
            print("Opção invalida!\n");
    }
    if($veiculo){
        $veiculo->setValorAluguel(readline("Qual foi o total do aluguel?"));
        $veiculo->setKm(readline("Quantos quilômetros foram rodados?"));
        print("O veículo ".$veiculo->getTipo() .", foi alugado por R$ ".number_format($veiculo->getValorAluguel(), 2, ",", ".").", rodou ".$veiculo->getKm()." quilômetros com custo total de R$ ".$veiculo->valorViagem().".\n");
    }
    continue;
}
?>
