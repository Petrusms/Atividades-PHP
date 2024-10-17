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
    $area = $Quadrado->getArea();
    $desenho = $Quadrado->getDesenho();

    print("O resultado da área é igual a $area\n");
    print($desenho);
}else if($type === "Cir"){
    $Circulo = new circulo();
    $Circulo->setRaio(readline("Qual o valor do raio desse círculo?\n"));
    $area = $Circulo->getArea();
    $desenho = $Circulo->getDesenho();

    print("O resultado da área é igual a $area\n");
    print($desenho);
}else{
    $Retangulo = new retangulo();
    $Retangulo->setAltura(readline("Qual o valor da altura desse retângulo?\n"));
    $Retangulo->setBase(readline("Qual o valor da altura desse retângulo?\n"));
    $area = $Retangulo->getArea();
    $desenho = $Retangulo->getDesenho();

    print("O resultado da área é igual a $area\n");
    print($desenho);
}
?>
