<section class="resultado-area">
    <?php
    session_start();
        echo "<div class='painel-resposta'>";
        if(isset($_POST['logar'])){
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            echo "Login = $login";

            if($login == "root" && $senha == "abcdef"){
                echo "<br/>Acesso concedido";
                $_SESSION['user'] = $login;
                echo "<br/><a href='ex11-2.php'>Ir para area de administração</a>";
            }
            else{               
                echo "<br/>Acesso negado";
            }
        }
        echo "</div>"
    ?>

</section>