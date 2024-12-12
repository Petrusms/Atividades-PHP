<?php
require_once("modelo/cd.php");
require_once("modelo/dvd.php");

$cd = new cd();
$cd->setNome("LinkPark")->setPreco(100);
print($cd);
$dvd = new dvd();
$dvd->setNome("ImagineDragons")->setPreco(100);
print($dvd);
?>
