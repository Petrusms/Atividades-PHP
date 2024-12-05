<?php
require_once("modelo/caneta.php");
require_once("modelo/canetaAzul.php");
require_once("modelo/canetaVermelha.php");

$c = new caneta();
$c->escrever();

$c = new canetaAzul();
$c->escrever();

$c = new canetaVermelha();
$c->escrever();
$c->escreverEspec();
$c->escreverPai();

?>
