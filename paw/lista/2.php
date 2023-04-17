        <?php
            $KW = $_GET['KW'];    
            $valor_hora = 0.12;
            $valor_total = $KW * $valor_hora;
            $valor_total = $valor_total + ($valor_total * 0.18);
            
            echo 'valor a ser pago: ', $valor_total;
        ?>
