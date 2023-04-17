<html>
    <head>
        <title>ex 1</title>
    </head>
    <body>
        <?php
            $sal_bruto = $_GET['sal_bruto'];
            $val_HE = $_GET['val_HE'];
            $horas_extras = $_GET['horas_extras'];

            $sal_liquido = $sal_bruto + ($val_HE * $horas_extras);   
            $sal_liquido = $sal_liquido - ($sal_liquido * 0.08);
            echo "O valor do salario liquido: ", $sal_liquido;       
        ?>
    </body>
</html>