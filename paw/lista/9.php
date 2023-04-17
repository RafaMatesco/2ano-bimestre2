<?php
    $peso = $_GET['peso'];
    $altura = $_GET['altura'];

    $imc = $peso/($altura*$altura);

    if($imc<20){
        echo 'Abaixo do peso';
    }else if(($imc>=20) && ($imc<25)){
        echo 'Peso normal';
    }else if(($imc>=25) && ($imc<30)){
        echo 'Sobrepeso';
    }else if(($imc>=30) && ($imc<40)){
        echo 'Obeso';
    }else if($imc>40){
        echo 'Obeso mórbido';
    }

?>