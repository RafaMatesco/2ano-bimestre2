<?php
    include 'class7.php';
    $class7 = new class7();

    $peso = $_GET['peso'];
    $class7->setpeso($peso);
    $altura = $_GET['altura'];
    $class7->setaltura($altura);

    $imc = $peso/($altura*$altura);
    $class7->setIMC($imc);
    echo 'imc = ', $class7->getIMC();

    if($imc<20){
        echo '<br>Abaixo do peso';
    }else if(($imc>=20) && ($imc<25)){
        echo '<br>Peso normal';
    }else if(($imc>=25) && ($imc<30)){
        echo '<br>Sobrepeso';
    }else if(($imc>=30) && ($imc<40)){
        echo '<br>Obeso';
    }else if($imc>40){
        echo '<br>Obeso mórbido';
    }

?>