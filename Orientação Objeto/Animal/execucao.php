<?php
    require_once("modelo/Cachorro.php");
    require_once("modelo/Gato.php");

    $gato1 = new Gato();
    $gato1->setNome("Escuridão");
    $gato1->setRaca("Bombaim");
    print($gato1->getDados());
    $gato1->miar();

    $gato2 = new Gato();
    $gato2->setNome("Jorge");
    $gato2->setRaca("Siâmes");
    print($gato2->getDados());
    $gato2->miar();

    $dog1 = new Cachorro();
    $dog1->setNome("Paris");
    $dog1->setRaca("Golden Retriever");
    print($dog1->getDados());
    $dog1->latir();

    $dog2 = new Cachorro();
    $dog2->setNome("Caramelo");
    $dog2->setRaca("Caramelo");
    print($dog2->getDados());
    $dog2->latir();
?>