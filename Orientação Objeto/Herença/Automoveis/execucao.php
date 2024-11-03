<?php
    require_once("modelo/Caminhao.php");
    require_once("modelo/CarroPasseio.php");
    require_once("modelo/Onibus.php");

    $carroP = new CarroPasseio("Civic", "Prateado", "200Km");
    $carroP->setQtdPassageiros("5");
    print($carro->getDados);
    ?>
