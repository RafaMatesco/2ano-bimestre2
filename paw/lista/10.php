<?php
    $lado1 = $_GET['lado1'];
    $lado2 = $_GET['lado2'];
    $lado3 = $_GET['lado3'];

    if(($lado1 == $lado2) && ($lado1 == $lado3) && ($lado2 == $lado3)){
        echo 'Triangulo Equilatero';
    }else if(($lado1 == $lado2) || ($lado1 == $lado3) || ($lado2 == $lado3)){
        echo 'Triangulo isoceles';
    }else if(($lado1 != $lado2) && ($lado1 != $lado3) && ($lado2 != $lado3)){
        echo ' Triangulo Escaleno';
    }

?>