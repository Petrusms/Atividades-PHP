<?php
require_once("modelo/circulo.php");
require_once("modelo/quadrado.php");
require_once("modelo/retangulo.php");

print("Qual forma entre essas você vai querer calcular a área?\n");
print("Qua, Cir e Ret\n");
$type = readline("");

if($type === "Qua"){
    $forma = new quadrado();
    $forma->setLado(readline("Qual o valor do lado desse quadrado?\n"));
}else if($type === "Cir"){
    $forma = new circulo();
    $forma->setRaio(readline("Qual o valor do raio desse círculo?\n"));
}else{
    $forma = new retangulo();
    $forma->setAltura(readline("Qual o valor da altura desse retângulo?\n"));
    $forma->setBase(readline("Qual o valor da altura desse retângulo?\n"));
}

print("O resultado da área é igual a ".$forma->getArea()."\n");
print($forma->getDesenho());
?>
