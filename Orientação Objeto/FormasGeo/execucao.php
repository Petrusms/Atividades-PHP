<?php
require_once("modelo/circulo.php");
require_once("modelo/quadrado.php");
require_once("modelo/retangulo.php");

print("Qual forma entre essas você vai querer calcular a área?\n");
print("Qua, Cir e Ret\n");
$type = readline("");

if($type === "Qua"){
    $Quadrado = new quadrado();
    $Quadrado->setLado(readline("Qual o valor do lado desse quadrado?\n"));
    print("O resultado da área é igual a ".$Quadrado->getArea()."\n");
    print($Quadrado->getDesenho());
}else if($type === "Cir"){
    $Circulo = new circulo();
    $Circulo->setRaio(readline("Qual o valor do raio desse círculo?\n"));
    print("O resultado da área é igual a ".$Circulo->getArea()."\n");
    print($Circulo->getDesenho());
}else{
    $Retangulo = new retangulo();
    $Retangulo->setAltura(readline("Qual o valor da altura desse retângulo?\n"));
    $Retangulo->setBase(readline("Qual o valor da altura desse retângulo?\n"));
    print("O resultado da área é igual a ".$Retangulo->getArea()."\n");
    print($desenho);
}
?>
