        <?php
            $idadeanos = $_GET['idade'];    
            $idadedias = $idadeanos*365;
            $idadehoras = $idadedias*24;
            $idademinutos = $idadehoras*60;
            $idadesgundos = $idademinutos*60;

            echo $idadeanos, ' anos  = ', $idadedias, 'dias <br>';
            echo $idadeanos, ' anos  = ', $idadehoras, 'horas <br>';
            echo $idadeanos, ' anos  = ', $idademinutos, 'minutos <br>';
        ?>
