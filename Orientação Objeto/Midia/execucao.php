
<?php
require_once("modelo/CD.php");
require_once("modelo/DVD.php");

$midia = [];

while(true){
    print("Escolhas um desses:\n");
    print("1: Criar cd\n");
    print("2: Criar dvd\n");
    print("3: Imprimir tudo\n");
    print("0: Emcerrar programa\n");
    $num = readline("");
    switch($num){
        case 1:
            $cd = new CD();
            $cd->setDescricao(readline("É do que esse cd, ou o nome dele?"));
            $cd->setPrecoPago(readline("Qual foi o preço dele?"));
            $midia[]=$cd;
            break;

        case 2: 
            $dvd = new DVD();
            $dvd->setDescricao(readline("É do que esse dvd?"));
            $dvd->setPrecoPago(readline("Qual foi o preço dele?"));
            $midia[]=$dvd;
            break;

        case 3:
            foreach($midia as $dado){
                if($dado instanceof CD){
                    print($dado->getTipo($dado) . $dado->getdados()."\n");
                }
            }
            foreach($midia as $dado){
                if($dado instanceof DVD){
                    print($dado->getTipo($dado) . $dado->getdados()."\n");
                }
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
