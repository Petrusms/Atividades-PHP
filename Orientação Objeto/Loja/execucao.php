<?php
require_once("modelo/Produto.php");
require_once("modelo/Computador.php");
require_once("modelo/Balde.php");
require_once("modelo/Livro.php");

$p = new Produto();
$p->setDescricao("Régua");
$p->setUniMedida("cm");
print($p->getDados());

$p = new Livro();
$p->setDescricao("terror");
$p->setUniMedida("volumes");
$p->setAutor("Maquiavel");
print($p->getDados());

$p = new Computador();
$p->setDescricao(" PC gamer");
$p->setUniMedida("peça");
$p->setProcessador("Intel core");
$p->setMemoria("Kingston");
print($p->getDados());

$p = new Balde();
$p->setDescricao(" grande");
$p->setUniMedida("litros");
$p->setCapacidade(50);
print($p->getDados());