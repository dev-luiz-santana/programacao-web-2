<section class="resultado-area">
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $cor = $_POST['cor'] ?? "Nenhuma cor selecionada";
            $quadrado;

            switch($cor){
                case 'preto':
                    $sig = "Cor preta escolhida, Significa sofisticação, poder e elegancia";
                    $quadrado = "black";
                    break;
                case 'branco':
                    $sig = "Cor branco escolhida, Significa leveza, pureza e bondade";
                    $quadrado = "white";
                    break;
                case 'azul':
                    $sig = "Cor azul escolhida, Significa tranquilidade, serenidade e confiança";
                    $quadrado = "blue";
                    break;
                case 'amarelo':
                    $sig = "Cor amarela escolhida, Significa alegria, calor e luz";
                    $quadrado = "yellow";
                    break;
                default:
                    $sig = "$cor<br/>escolha uma cor no formulario antes de enviar";
                    $quadrado = "grey";
                    break;
            }

            echo "<div class='painel-resposta'>";
            echo "<p><br><strong>$sig</strong></p>";
            echo "<div style='width: 100px; height: 100px; background-color: $quadrado'></div>";
            echo "</div>";
        }
    ?>
</section>