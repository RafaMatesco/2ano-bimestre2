<?php
    $idade_nad = $_GET['idade_nad'];

    if(($idade_nad >= 5) && ($idade_nad <=7)){
        $cat_nad = 'infantil A';
        echo 'O nadador entra na categoria: ', $cat_nad;
    }else if(($idade_nad >= 8) && ($idade_nad <=11)){
        $cat_nad = 'infantil B';
        echo 'O nadador entra na categoria: ', $cat_nad;
    }else if(($idade_nad >= 12) && ($idade_nad <=13)){
        $cat_nad = 'juvenil A';
        echo 'O nadador entra na categoria: ', $cat_nad;
    }else if(($idade_nad >= 14) && ($idade_nad <=17)){
        $cat_nad = 'juvenil B';
        echo 'O nadador entra na categoria: ', $cat_nad;
    }else if($idade_nad >= 18){
        $cat_nad = 'adulto';
        echo 'O nadador entra na categoria: ', $cat_nad;
    }
?>