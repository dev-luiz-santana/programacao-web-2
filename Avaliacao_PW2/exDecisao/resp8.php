<section class="resultado-area">
    <?php
        echo "<div class='painel-resposta'>";
        if(isset($_POST['classificar'])){
            $num = $_POST['num'];
            


            
        if ($num >= 1){
            echo "Esse número é: Positivo";

        }

        else if($num <= -1) 
        {
            echo "Esse número é: Negativo";
        }
        else
        {
            echo "Este é um número nulo";
        }

        }
        echo "</div>"
    ?>

</section>