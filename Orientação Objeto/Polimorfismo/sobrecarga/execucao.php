<?php
require_once("modelo/exemplo.php");

$e = new exemplo();
$e->escrever(123);
$e->escrever();
$e->escrever(123, 123);
?>