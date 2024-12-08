
<?php
require_once("modelo/ingresso.php");
require_once("modelo/ingressoVip.php");
require_once("modelo/ingressoCamarote.php");

$ingressos = [];

while(true){
    print("Escolhas um desses:\n");
    print("1: Comprar Ingresso\n");
    print("2: Comprar Ingresso vip\n");
    print("3: Comprar Ingresso camarote\n");
    print("4: Imprimir tudo\n");
    print("0: Emcerrar programa\n");
    $num = readline("");
    switch($num){
        case 1:
            $ingresso = new ingresso();
            $ingresso->setValor(readline("Qual foi o valor do ingresso?"));
            $ingressos[]=$ingresso;
            break;

        case 2: 
            $ingressoV = new ingressoVip();
            $ingressoV->setValor(readline("Qual foi o valor do ingresso?"));
            $ingressoV->setValorAdiconal(readline("Qual foi o valor adicional do ingresso vip?"));
            $ingressos[]=$ingressoV;
            break;

        case 3: 
            $ingressoC = new ingressoCamarote();
            $ingressoC->setValor(readline("Qual foi o valor do ingresso?"));
            $ingressoC->setValorAdiconal(readline("Qual foi o valor adicional do ingresso vip?"));
            $ingressoC->setValorAdiconalCamarote(readline("Qual foi o valor adicional do ingresso camarote?"));
            $ingressos[]=$ingressoC;
            break;

        case 4:
            foreach ($ingressos as $dado) {
                print(get_class($dado) . ": " . $dado->getValorTotal() . "\n");
            }
            break;
        case 0:
            print("Programa encerrado...\n");
            return true;
            
        default: 
            print("Opção invalida!\n");
    }
}
?>
