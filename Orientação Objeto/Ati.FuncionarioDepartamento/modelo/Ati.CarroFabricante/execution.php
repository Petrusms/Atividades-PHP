<?php
require_once("modelo/Manufacturer.php");
require_once("modelo/Car.php");

$carros = [];
$facturer = [
    new Manufacturer("Volkswagem", "VW"),
    new Manufacturer("Chevrolet", "GM"),
    new Manufacturer("Fiat", "F"),
    new Manufacturer("Renault", "RN"),
];

function Cadastro($facturer){
    $carro = new Car;

    $fabricante = null;
    $sigla = readline("Informe a sigla do fabricante!!!\n");

    foreach ($facturer as $fab) {
        if($fab->getAcronym() === $sigla){
            $fabricante = $fab;

            $carro->setModel(readline("Qual o modelo do carro? \n"))
          ->setYearManufacturing(readline("Qual o ano de fabricação? \n"))
          ->setManufacturer($fabricante);

        return $carro;
        } else {
            print("Fabricante não encontrado!!!\n");
            return false;
            break;
        }
    }
}

function listar($carros){
    foreach($carros as $car){
        print("Fabricante: ". $car->getManufacturer()->getName() ."\n");
        print("Ano de Fabricação:". $car->getYearManufacturing() ."\n");
        print("Modelo: ". $car->getModel() ."\n");
    }
}

while(true){
    print("╔══════════════Menu═══════════╗\n");
    print("║     O que deseja fazer?     ║\n");
    print("║ 1: Adicionar Carro          ║\n");
    print("║ 2: Excluir Carro            ║\n");
    print("║ 3: Listar Carros            ║\n");
    print("║ 0: Encerrar o pragrama      ║\n");
    print("╚═════════════════════════════╝\n");

    $num = readline("");
    switch($num){
        case 1:
            print("Escolhas um dessas fabricantes!!!\n\n");
            foreach ($facturer as $fab) {
                print("Fabricante: ". $fab->getName() ." | Sigla: ". $fab->getAcronym() ."\n");
            }
            print("\n");
            if(true){
            array_push($carros, Cadastro($facturer));
            }
            break;
        case 2:
            $qtd = readline("Quantos carros você deseja remover?\n");
            if((count($carros)+1) >= $qtd){
                for($i=0; $i<$qtd; $i++){
                    if(count($carros)>0){
                        $i=1;

                        print("Qual número você vai querer remover?\n");
                        foreach($carros as $c){
                            print($i.")".$c->getModel()." | ". $c->getYearManufacturing() ."\n");
                            $i++;
                        }
                        $num=readline("");
                        $num = $num - 1;
                        
                        if ($num <= count($carros)) {
                            array_splice($carros, $num, 1);
                            print("Removido com sucesso!\n");
                        } else {
                            print("Número inválido! Não foi possível remover.\n");
                        }
                        break;
                    }
                }
            } else {
                print("Não é possivel remover essa quantidade!!!\n");
                print("Só tem essa quantidade de carros para remover: ". count($carros) ."\n");
                break;
            }
        case 3: 
            if(count($carros)>0){
                listar($carros);
                break;
            } else {
                print("Não tem carros cadastrados!!!\n");
                break;
            }
        case 0:
            print("Programa encerrado...\n");
            return true;
        
        default: 
            print("Opção invalida!\n");

    }
}
?>
