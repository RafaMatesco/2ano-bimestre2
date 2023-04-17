<?php
    include "class4.php";
    $class4 = new class4();
    
    $nota = $_GET['nota'];
    $class4->setnota($nota);

    if(($nota == 10)||($nota == 9)){
        $conceito = 'A';
    }else if(($nota == 8)||($nota == 7)){
        $conceito = 'B';
    }else if(($nota == 6)||($nota == 5)){
        $conceito = 'C';
    }else if($nota<5){
        $conceito = 'D';
    }else{
        $conceito = 'Nota nao valida';  
    }

    $class4->setconceito($conceito);
    echo $class4->getnota(), ' em conceito = ', $class4->getconceito();
?>