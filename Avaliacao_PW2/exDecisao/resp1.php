<section class="resultado-area">
    <?php
    if (isset($_POST['verificar'])) {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        echo "<div class='painel-resposta'>";
        echo "<h3>Resultado da Análise</h3>";
        
        // Lógica IF-ELSE Simples
        if ($idade >= 18) {
            // Se a condição (idade maior ou igual a 18) for VERDADEIRA
            echo "<p>Olá <strong>$nome</strong>!</p>";
            echo "<h2>VOCÊ É MAIOR DE IDADE</h2>";
            echo "<p>Já pode tirar a habilitação e responder por seus atos.</p>";
        } else {
            // Se a condição for FALSA (menor que 18)
            echo "<p>Olá <strong>$nome</strong>!</p>";
            echo "<h2 >VOCÊ É MENOR DE IDADE</h2>";
            echo "<p>Aguarde mais alguns anos para atingir a maioridade penal.</p>";
        }
        echo "<hr><br>";
        echo "<h2>IDADE: $idade  anos</h2>";
        echo "</div>";
    }
    ?>
</section>