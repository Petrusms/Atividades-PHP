<?php

require_once("modelo/Time.php");
require_once("modelo/Jogador.php");

$time = new Time();
$time->setNome("IDK");
$time->setCidade("Canadá");

$jogador = new Jogador();
$jogador->setNome("Darlan");
$jogador->setNumero("11");
$jogador->setTime($time);

$time1 = new Time();
$time1->setNome("Brasil");
$time1->setCidade("Canadá");

$jogador1 = new Jogador();
$jogador1->setNome("Bruninho");
$jogador1->setNumero("22");
$jogador1->setTime($time);

//print($jogador->getTime()->getNome()."\n");
//$t = $jogador->getTime();
//print($t->getCidade());

$jogadores = array();
array_push($jogadores, $jogador);
array_push($jogadores, $jogador1);
$jogadores = $time->setJogadores($jogadores);
print_r($jogadores)
?>
