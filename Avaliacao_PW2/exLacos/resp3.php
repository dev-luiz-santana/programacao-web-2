<section class="resultado-area">
    <?php
        echo "<div class='painel-resposta'>";
        if(isset($_POST['enviar'])){
            $val = intval($_POST['val']);
            $i = 0;
            $cont_notas=0;
            //var_dump($val);

            echo "<b>Saque completo</b><br><br>"; 
            echo '<section class="notas">';
            while($val >$i){
                echo "<div class='nota'>R$50.00</div>";
                $i+=50;
                $cont_notas++;
            }
            echo '</section>';
            echo "<br>Você sacou R$". number_format($val,2,',','.');
            echo "<br>Total de cedulas entregue: $cont_notas notas de cinquenta";
        }
        echo "</div>"
    ?>
</section>