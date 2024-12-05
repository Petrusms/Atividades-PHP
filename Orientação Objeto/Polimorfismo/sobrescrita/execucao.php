<?php
require_once("modelo/caneta.php");
require_once("modelo/canetaAzul.php");

$c = new caneta();
$c->escrever();

$c = new canetaAzul();
$c->escrever();

?>