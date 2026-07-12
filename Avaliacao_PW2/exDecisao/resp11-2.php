<section class="resultado-area">
    <?php
        echo "<div class='painel-resposta'>";
        if(isset($_POST['enviar'])){
            $seguranca = $_POST['seguranca'] ?? [];
             
            if(!empty($seguranca)){
                echo "<p>Os seguintes metodos foram aplicados: </p>";
                echo "<ul>";

                foreach($seguranca as $metodos){
                    echo "<li>$metodos</li>";
                }
                echo "</ul>";
            } else{
                echo "<p>Nenhum metodo foi selecionado</p>";
            }
        }
        echo "</div>";
    ?>
</section>