<?php

    include "class1.php";
    $salLiquido = new funcionario();

    $valor_salBruto = $_GET['valor_salBruto'];
    $salLiquido->setSalBruto($valor_salBruto);

    $valor_HoraExtra = $_GET['valor_HoraExtra'];
    $salLiquido->setHoraExtra($valor_HoraExtra);

    $valor_NHorasExtras = $_GET['valor_NHorasExtras'];
    $salLiquido->setNHorasExtras($valor_NHorasExtras);
    
    $valor_salLiquido = $valor_salBruto + ($valor_HoraExtra * $valor_NHorasExtras);
    $valor_salLiquido = $valor_salLiquido - ($valor_salLiquido * 0.08); 

    $salLiquido->setSalLiquido($valor_salLiquido);

    echo "O valor de seu salario liquido: ", $salLiquido->getSalLiquido();

?>