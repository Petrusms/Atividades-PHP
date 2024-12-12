<?php
require_once("modelo/resto.php");
require_once("modelo/divisao.php");
require_once("modelo/multiplicacao.php");
require_once("modelo/soma.php");
require_once("modelo/subtracao.php");

while(true){
    print("Escolhas um desses:\n");
    print("1: Somar(+)\n");
    print("2: Subtrair(-)\n");
    print("3: Multiplicação(x)\n");
    print("4: Divisão(/)\n");
    print("5: Resto(%)\n");
    print("6: Fazer todas as operações\n");
    print("0: Encerrar programa\n");
    $num = readline("");

    $calculo = null;
    switch($num){
        case 1:
            $calculo = new soma();
            break;

        case 2: 
            $calculo = new subtracao();
            break;

        case 3: 
            $calculo = new multiplicacao();
            break;

        case 4:
            $calculo = new divisao();
            break;

        case 5:
            $calculo = new resto();
            
            break;

        case 6:
            $numA = readline("Qual o primeiro valor?");
            $numB = readline("Qual o segundo valor?");
            if($numA > 0 && $numB > 0){
                $soma = new soma();
                $soma->setNumA($numA)->setNumB($numB);
                $substracao = new subtracao();
                $substracao->setNumA($numA)->setNumB($numB);
                $multiplicacao = new multiplicacao();
                $multiplicacao->setNumA($numA)->setNumB($numB);
                $divisao = new divisao();
                $divisao->setNumA($numA)->setNumB($numB);
                $resto = new resto();
                $resto->setNumA($numA)->setNumB($numB);

                print("\nSoma: ".$soma->calcular());
                print("\nSubtração: ".$substracao->calcular());
                print("\nMultiplicação: ".$multiplicacao->calcular());
                print("\nDivisão: ".$divisao->calcular());
                print("\nResto: ".$resto->calcular()."\n");

                break;
            }
            return true;
        
        case 0:
            print("Programa encerrado...\n");
            return true;
            
        default: 
            print("Opção invalida!\n");
    }
    if($calculo){
        $calculo->setNumA(readline("Qual o primeiro valor?"));
            $calculo->setNumB(readline("Qual o segundo valor?"));
            if($calculo->getNumA()>0 && $calculo->getNumB()>0){
                print("O resultado foi: ".$calculo->calcular()."\n");
                continue;
            }
            return true;
    }
    continue;
}
?>
