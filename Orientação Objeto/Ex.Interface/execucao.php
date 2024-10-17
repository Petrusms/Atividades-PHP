<?php
require_once("modelo/classRadioPortatil.php");
require_once("modelo/RadioRelogio.php");

$type=readline("Qual radio você está usando?(RR ou RP)\n");
$radio = null;

if($type === "RP"){
    $radio = new RadioPortatil();
    $radio->setCor(readline("Qual a cor do rádio?\n"))
        ->setMarca(readline("Qual a marcada dele?\n"));
}else if($type === "RR"){
    $radio = new RadioRelogio();
    $radio->setCorTela(readline("Qual a cor da tela?"));
}

$radio->ligarRadio();
$radio->desligarRadio();
if($radio instanceof IRelogio){
    $radio->mostrarHoras();
}
?>
