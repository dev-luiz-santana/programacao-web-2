<section class="resultado-area">
    <?php
        echo "<div class='painel-resposta'>";
        if(isset($_POST['descobrir'])){
            $numero = $_POST['numero'];
            $resultado;


            $resultado = $numero%2;
        if ($resultado == 0){
            echo "Esse número é: Par";

        }

        else {
            echo "Esse número é: Ímpar";
        }


        }
        echo "</div>"
    ?>

</section>