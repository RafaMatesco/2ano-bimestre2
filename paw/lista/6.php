        <?php
            $lata350ml = $_GET['350ml'];
            $garr600ml = $_GET['600ml']; 
            $garr2l = $_GET['2l'];

            if($lata350ml>1){
                $totalLitros = $lata350ml *0.350;
            }
            if($garr600ml>1){
                $totalLitros = $totalLitros + $garr600ml * 0.600;
            }
            if($garr2l>1){
                $totalLitros = $totalLitros + $garr2l * 2;
            }

            echo 'O total de litros adquiridos = ', $totalLitros;
        ?>
