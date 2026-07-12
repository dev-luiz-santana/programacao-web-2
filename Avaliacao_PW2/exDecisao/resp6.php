<section class="resultado-area">
    <?php
        echo "<div class='painel-resposta'>";
        if(isset($_POST['logar'])){
            $login = $_POST['login'];
            $senha = $_POST['senha'];

            echo "Login = $login senha = $senha";

            if($login == "Admin" && $senha == "senha123"){
                echo "<br/>Acesso concedido";
            }
            else{               
                echo "<br/>Acesso negado";
            }
        }
        echo "</div>"
    ?>

</section>