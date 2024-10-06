<?php
require_once("modelo/Pedido.php");
require_once("modelo/Prato.php");
$pratos = [
    new Prato(1, "Camarão à Milanesa", 110.00),
    new Prato(2, "Pizza Margherita", 80.00),
    new Prato(3, "Macarrão à Carbonara", 60.00),
    new Prato(4, "Bife à Parmegiana", 75.00),
    new Prato(5, "Risoto ao Funghi", 70.00),
];

$pedidos = [];

function cadastro($pratos){
    print("Pratos que o restaurante “Bona Comida” serve aos clientes:\n");
    foreach($pratos as $p){
        print($p->getNum()." | ". $p->getNome() . " | ". $p->getValor() ."\n");
    }
    $parar = true;
    while($parar = true){
        $numPrato = readline("Qual é o número do prato?");
        foreach($pratos as $p){
            if($p->getNum() == $numPrato) {
                $pedido = new Pedido;
                $pedido->setNomeCli(readline("Qual o nome do cliente?\n"))
                    ->setNomeGarcom(readline("Qual o nome do garçom?\n"))
                    ->setPrato($p);
                return $pedido;
                $parar = false;
            }
        }
        print("Número do prato não encontrado!!!\n");
    } 
}

while(true){
    //print("╔══════════════════════════════════════════╗\n");
    //print("║ Número ║         Nome         ║ Valor(R$)║\n");
    //print("╔══════════════════════════════════════════╗\n");
    //print("║   1    ║ Camarão à Milanesa   ║ 110,00   ║\n");
    //print("║   2    ║ Pizza Margherita     ║ 80,00    ║\n");
    //print("║   3    ║ Macarrão à Carbonara ║ 60,00    ║\n");
    //print("║   4    ║ Bife à Parmegiana    ║ 75,00    ║\n");
    //print("║   5    ║ Risoto ao Funghi     ║ 70,00    ║\n");
    //print("╚══════════════════════════════════════════╝\n");

    print("╔═══════Bona Comida══════╗\n");
    print("║   O que deseja fazer?  ║\n");
    print("║ 1: Cadastrar Pedido    ║\n");
    print("║ 2: Cancelar Pedido     ║\n");
    print("║ 3: Listar Pedidos      ║\n");
    print("║ 4: Total de Vendas     ║\n");
    print("║ 0: Encerrar o pragrama ║\n");
    print("╚════════════════════════╝\n");

    $num = readline("");
    switch($num){
        case 1:
            print("\n");
            $pedido = cadastro($pratos);
            array_push($pedidos, $pedido);
            break;
        case 2:
            if(count($pedidos)>0){
                print("Qual número de pedido você vai querer remover?\n");
                $n = 1;
                foreach($pedidos as $p){
                    if($p !== null){
                        print($n ." | ". $p->getNomeCli() ." | ". $p->getPrato()->getNome() ."\n");
                    }
                $n++;
                }
                $num=readline("");
                $num = $num - 1;
                
                if ($num <= count($pedidos)) {
                    array_splice($pedidos, $num, 1);
                    print("Pedido cancelado com sucesso!\n");
                    break;
                } else {
                    print("Número inválido! Não foi possível cancelar o pedido.\n");
                }
                break;
            }else {
                print("Não tem pedidos cadastrados para cancelar!!!\n");
                break;
            }
        case 3:
            if(count($pedidos)>0){
                foreach($pedidos as $p){
                    if($pedidos !== null){
                    print("O cliente ". $p->getNomeCli() .", foi atendido pelo garçom ". $p->getNomeGarcom() .", pediu um prato de ". $p->getPrato()->getNome() ." no valor de R$ ". $p->getPrato()->getValor() ."\n");
                    }
                }
            break;
            } else {
                print("Não tem pedidos cadastrados!!!\n");
                break;
            } 
        case 4:
            $valorTotal = 0;
            $pedidosTotal = 0;
            foreach ($pedidos as $p) {
                if($p != null){
                    $valorTotal += $p->getPrato()->getValor();
                    $pedidosTotal++;
                }
            }
            if($pedidos > 0 && $valorTotal > 0){
                print("Foram feitos ". $pedidosTotal ." pedidos, e o valor total de todos foi R$ ". $valorTotal ."\n");
            break;
            }else{
                print("Não foi feito nenhuma venda ainda!!!.\n");
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
