<?php
require_once("modelo/Gerente.php");
require_once("modelo/Desenvolvedor.php");
require_once("modelo/Estagiario.php");

$cargos = [];
while(true){
    print("Escolhas um desses cargos:\n");
    print("1: Gerente\n");
    print("2: Desenvolvedor\n");
    print("3: Estagiário\n");
    print("4: Listar tudo\n");
    print("0: Encerrar programa\n");
    $num = readline("");

    $cargo = null;
    switch($num){
        case 1:
            $cargo = new Gerente();
            break;

        case 2: 
            $cargo = new Desenvolvedor();
            break;

        case 3: 
            $cargo = new Estagiario();
            break;

        case 4:
            foreach ($cargos as $dado) {
                print($dado);
            }
            break;
        
        case 0:
            print("Programa encerrado...\n");
            return true;
            
        default: 
            print("Opção invalida!\n");
    }
    if($cargo){
        $cargo->setNome(readline("Qual seu nome?"));
        print($cargo);
        $cargos[]=$cargo;
    }
    continue;
}
?>
