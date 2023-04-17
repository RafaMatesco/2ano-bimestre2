        <?php
            $nota1 = $_GET['nota1'];
            $nota2 = $_GET['nota2'];
            $nota3 = $_GET['nota3'];

            $media = ($nota1+$nota2+$nota3)/3;
            if($media >= 7){
                echo 'Sua media = ', $media;
                echo '<br>O aluno foi aprovado';
            }
            if($media < 7){
                echo 'Sua media = ', $media;
                echo '<br>O aluno nao foi aprovado';
            }
        ?>
