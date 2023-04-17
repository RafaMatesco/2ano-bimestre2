<?php
    include 'class5.php';
    $class5 = new class5();

    $num = $_GET['num'];
    $class5->setnum($num);

    if($num>0){
        if($num%2==0){
            echo 'o numero ', $class5->getnum(), ' eh par';
        }else{
            echo 'o numero ', $class5->getnum(), ' eh impar';
        }
    }else{
        echo 'o numero ', $class5->getnum(), ' eh negativo';
    }

?>