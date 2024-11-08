<?php
require_once("modelo/Combatente.php");
require_once("modelo/Curandeiro.php");
require_once("modelo/Poder.php");

$power1 = new Poder("recupera energia", 0);
$power2 = new Poder("recupera energia super", 20);
$power3 = new Poder("golpe normal", 0);
$power4 = new Poder("golpe especial", 15);

$mago1 = new Curandeiro();
$mago1->setNome(readline("Qual o seu nome?"));
$mago1->setPoder($power2);
$mago1->setForcaCura(100);
print($mago1->lancarPoder());

$mago2 = new Combatente();
$mago2->setNome(readline("Qual o seu nome?"));
$mago2->setPoder($power4);
$mago2->setForcaAtq(100);
print($mago2->lancarPoder());
?>