

<?php
require_once("modelo/ClientePF.php");
require_once("modelo/ClientePJ.php");
require_once("dao/ClienteDAO.php");
require_once("util/Conexao.php");
$con = Conexao::getCon();

function escrever($registros){
    if($registros!=null){
        foreach($registros as $dados){
            print("ID: {$dados->getId()}, Nome Social: {$dados->getNomeSocial()}, Email: {$dados->getEmail()}");
            if($dados->getrTipo() == 'F'){
                print(", Nome: {$dados->getNome()}, CPF: {$dados->getCPF()}");
            } else {
                print(", Razão Social: {$dados->getRazaoSocial()}, CNPJ: {$dados->getCNPJ()}");
            }
            print("\n");
        }
    }else{
        print("Nenhum cliente encontrado.\n");
    }
}
while(true){
    print("╔═══════Cadastro Clientes══════╗\n");
    print("║      O que deseja fazer?     ║\n");
    print("║    1: Cadastrar Cliente PF   ║\n");
    print("║    2: Cadastrar Cliente PJ   ║\n");
    print("║    3: Listar Clientes        ║\n");
    print("║    4: Buscar Clientes        ║\n");
    print("║    5: Excluir Clientes       ║\n");
    print("║    0: Encerrar o pragrama    ║\n");
    print("╚══════════════════════════════╝\n");

    $num = readline("");
    switch($num){
        case 1:
            $cliente = new ClientePF();
            $cliente->setNome(readline("Qual o seu nome?"));
            $cliente->setCPF(readline("Qual o seu CPF?"));
            $cliente->setEmail(readline("Qual o seu e-mail?"));
            $cliente->setNomeSocial(readline("Qual o seu nome social?"));

            $clienteDao = new ClienteDao();
            $clienteDao->inserirCliente($cliente);
            print("Cliente PF cadastrado com sucesso!\n");
            break;
        case 2:
            $cliente = new ClientePJ();
            $cliente->setNomeSocial(readline("Qual o seu nome social?"));
            $cliente->setEmail(readline("Qual o seu e-mail?"));
            $cliente->setCNPJ(readline("Qual o seu CNPJ?"));
            $cliente->setRazaoSocial(readline("Qual a sua razão social?"));

            $clienteDao = new ClienteDao();
            $clienteDao->inserirCliente($cliente);
            print("Cliente PJ cadastrado com sucesso!\n");
            break;
        case 3:
            $clienteDao = new ClienteDao();
            $registros = $clienteDao->listarClientes();
            if($registros==0){
                print("Nenhum cliente cadrastado!!\n");
            }else{
                escrever($registros);
            }
            break;
        case 4:
            $clienteDao = new ClienteDao();
            $registros = $clienteDao->listarClientes();
            if($registros!=null){
                $registros = $clienteDao->buscarClientes(readline("Informe o codigo de identificação(id)."));
                escrever($registros);
            }else{
                print("Nenhum cliente cadrastado!!\n");            }
            break;
        case 5:
            $clienteDao = new ClienteDao();
            $registros = $clienteDao->listarClientes();
            if($registros==0){
                print("Nenhum cliente cadrastado!!\n");
            }else{
                escrever($registros);

                $ID = readline("Informe o ID que deseja excluir.");
                $registros = $clienteDao->buscarClientes($ID);
                if($registros!=null){
                    $clienteDao->excluirCliente($ID);
                    print("Cliente excluido.\n");
                }else{
                    print("ID de Cliente não encontrado.\n");
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
