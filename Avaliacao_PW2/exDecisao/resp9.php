<section class="resultado-area">
    <?php
        echo "<div class='painel-resposta'>";
        if(isset($_POST['enviar'])){
            $nome = $_POST['nome'];
            $pref = $_POST['pref'] ?? [];
            
            echo "Olá, $nome";
             
            if(!empty($pref)){
                echo "<p>Você gosta de:</p>";
                echo "<ul>";

                foreach($pref as $linguagens){
                    echo "<li>$linguagens</li>";
                }
                echo "</ul>";
            } else{
                echo "<p>Você não gosta de nenhuma das linguagens :(</p>";
            }
        }
        echo "</div>";
    ?>

</section>