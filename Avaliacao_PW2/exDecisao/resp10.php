<section class="resultado-area">
    <?php
        if(isset($_POST['enviar'])){
            $nome  = $_POST['nome'];
            $email = $_POST['email'];
            $tel = $_POST['telefone'];
        
            $opc1 = isset($_POST['opc1'])?$_POST['opc1']:null;
            $opc2 = isset($_POST['opc2'])?$_POST['opc2']:null;
            $opc3 = isset($_POST['opc3'])?$_POST['opc3']:null;
            $opc4 = isset($_POST['opc4'])?$_POST['opc4']:null;

            $selecao = "";
            if($opc1 != null){
                $selecao .= "<li>$opc1</li>";
            }
            if($opc2 != null){
                $selecao .= "<li>$opc2</li>";
            }
            if($opc3 != null){
                $selecao .= "<li>$opc3</li>";
            }
            if($opc4 != null){
                $selecao .= "<li>$opc4</li>";   
            }

            echo "<div class='painel-resposta'>";
            echo "<h3>Exibição dos dados coletados</h3>";
            echo "<p><strong>Nome: $nome</strong></p>";
            echo "<p><strong>Email: $email</strong></p>";
            echo "<p><strong>Telefone: $tel</strong></p>";
            echo "<hr><br>";

            if($selecao == null){
                echo "<p>Nenhum item foi selecionado</p>";
            }
            else{
                echo "<h3>Seus conhecimentos:</h3><br>";
                echo "<ul>.$selecao</ul>";
            }
            
            echo "</div>";
        }
    ?>
</section>