<?php
    include 'class6.php';
    $class6 = new class6();

    $a = $_GET['a'];
    $class6->seta($a);
    $b = $_GET['b'];
    $class6->setb($b);
    $c = $_GET['c'];
    $class6->setc($c);
    
    $delta = ($b * $b) - ((4 * $a) * $c);

    $raiz1 = (-$b + sqrt($delta)) / (2*$a);
    $class6->setraiz1($raiz1);
    $raiz2 = (-$b - sqrt($delta)) / (2*$a);
    $class6->setraiz2($raiz2);

    if($raiz1!='NAN' and $raiz2!='NAN'){
        echo 'As raizes da equacao de segundo grau com os valores a=', $class6->geta(), ', b=', $class6->getb(), ', c=', $class6->getc(), ' : S{', $class6->getraiz1(), ', ', $class6->getraiz2(), '}';
    }else{
        echo 'Impossivel calcular o valor das raizes';
    }
    