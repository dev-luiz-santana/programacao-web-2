<section class="resultado-area">
    <?php
    if (isset($_POST['media'])) {
        $disciplina = $_POST['disciplina'];
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];

        // Cálculo da Média Aritmética
        $media = ($n1 + $n2 + $n3) / 3;

        // Estrutura Condicional Composta
        if ($media >= 5 && $media <=6.9) {
            $situacao = "RECUPERACAO";
            $cor = "#fd7e14"; 
        } elseif ($media >= 7) {
            // Se não for >= 7, mas for >= 5, cai aqui (entre 5.0 e 6.9)
            $situacao = "APROVADO";
            $cor = "#28a745"; 
        } else {
            // Se for menor que 5
            $situacao = "REPROVADO";
            $cor = "#dc3545"; // Vermelho
        }

        echo "<div class='painel-resposta'>";
        echo "<h3>Boletim: $disciplina</h3>";
        
        echo "<ul>";
        echo "<li>Nota 1: $n1</li>";
        echo "<li>Nota 2: $n2</li>";
        echo "<li>Nota 3: $n3</li>";
        echo "</ul>";

        echo "<hr>";
        
        echo "<p>Média Final: <strong>" . number_format($media, 1, ',', '.') . "</strong></p>";
        echo "<div style='margin-top: 15px; padding: 10px; color: #fff; background: $cor; text-align: center; font-weight: bold;'>";
        echo $situacao;
        echo "</div>";
        
        echo "</div>";
    }
    ?>
</section>