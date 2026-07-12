<section class="resultado-area">
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $persona = $_POST['persona'] ?? "Nenhuma personalidade";
            $nome = $_POST['nome'];
            $img;

            switch($persona){
                case "Colérico":
                    $img = "colerico.png";
                    break;
                case "Melancólico":
                    $img = "melancolico.png";
                    break;
                case "Sanguíneo":
                    $img = "sanguineo.png";
                    break;
                case "Fleumático":
                    $img = "fleumatico.png";
                    break;
                default:
                    $img = "nao_selecionado.png";
                    break;
            }
            echo "<div class='painel-resposta'>";
            echo "<h4>Olá $nome</h4>";
            echo "<p><br><strong>Você selecionou : $persona</strong></p><br/>";
            echo "<img src='../img/$img' alt='' style='width: 300px; height: 300px;'>";
            echo "</div>";
        }
    ?>
    <img src="" alt="" >
</section>