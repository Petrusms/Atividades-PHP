<?php
require_once("modelo/Cidade.php");
require_once("modelo/Estado.php");

$estado = new Estado("SC", "Florianópolis");
$cidade = new Cidade();
$cidade->setNome("IDK")
        ->setQtdHabitantes("500k")
        ->setAltitude("400m")
        ->setEstado($estado);

$estado1 = new Estado("PR","Paraná");
$cidade1 = new Cidade();
$cidade1->setNome("Foz do Iguaçu")
        ->setQtdHabitantes("258.248")
        ->setAltitude("192m")
        ->setEstado($estado1);

$cidades = array($cidade, $cidade1);

foreach($cidades as $c){
    printf("A cidade de %s, localizada no estado %s-%s, possui %d habitantes e uma altitude de %d metros.\n",
     $c->getNome(), $c->getEstado()->getNome(), $c->getEstado()->getSigla(), $c->getQtdHabitantes(), $c->getAltitude());
}
?>
