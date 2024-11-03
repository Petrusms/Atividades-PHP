<?php
    require_once("modelo/Caminhao.php");
    require_once("modelo/CarroPasseio.php");
    require_once("modelo/Onibus.php");

    $carroP = new CarroPasseio("Civic", "Prateado", 200);
    $carroP->setQtdPassageiros(5);
    print($carroP->getDados());

    $onibus = new Onibus("Mercedes-Benz", "Azul", 108);
    $onibus->setQtdPassageiros(44);
    $onibus->setPesoMax(16.500);
    print($onibus->getDados());

    $caminhao = new Caminhao("Caterpillar", "verde", 68);
    $caminhao->setQtdCarga(400);
    $caminhao->setAltura(6,52);
    print($caminhao->getDados());
    ?>
