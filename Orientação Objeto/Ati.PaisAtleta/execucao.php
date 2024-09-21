<?php
require_once("modelo/Pais.php");
require_once("modelo/Atleta.php");

$canada = new Pais("Canadá", "Ámerica do Norte");
$brasil = new Pais("Brasil", "Ámerica do Sul");

$atletas = [];

$atleta1 = new Atleta();
$atleta1->setNome("CBum")->setIdade(29)->setEsporte("Fisiculturista")->setPais($canada);
$atleta2 = new Atleta();
$atleta2->setNome("Courtney Alexis")->setIdade(31)->setEsporte("Fisiculturista")->setPais($canada);
$atleta3 = new Atleta();
$atleta3->setNome("Darlan")->setIdade(22)->setEsporte("Vôlei")->setPais($brasil);
$atleta4 = new Atleta();
$atleta4->setNome("Lucarelli")->setIdade(32)->setEsporte("Vôlei")->setPais($brasil);

$atletas = [$atleta1, $atleta2, $atleta3, $atleta4];

foreach($atletas as $dados){
    print($dados->getNome() ."é atleta do ". $dados->getPais()->getNome() .", continente: ". $dados->getPais()->getContinente() .", possui ". $dados->getIdade() ." anos e atua no esporte: ". $dados->getEsporte() .".\n");
}
?>
