<?php
    include "class2.php";
    $class2 = new class2();

    $precoFabrica = $_GET['precoFabrica'];
    $class2->setprecoFabrica($precoFabrica);

    $perDistribuidor = $precoFabrica * 0.28;
    $impostos = $precoFabrica * 0.45;

    $precoConsumidor = $precoFabrica + $perDistribuidor + $impostos;
    $class2->setprecoConsumidor($precoConsumidor);

    echo "o valor para o consumidor: ", $class2->getprecoConsumidor();
?>