<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PW2 - Média Escolar (Condicional Composta)</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <?php include '../includes/cabecalho.php'; ?>

    <main class="container-exercicio">
        <section class="enunciado">
            <h2>Exercício 02 - Média e Situação Escolar</h2>
            <p>A <strong>Estrutura Condicional Composta</strong> (<code>if - elseif - else</code>) permite que o programa escolha entre três ou mais caminhos diferentes. 
               O PHP avalia a primeira condição; se for falsa, pula para a próxima (<code>elseif</code>), e só executa o <code>else</code> se nenhuma das anteriores for atendida. 
               É ideal para classificações como notas, faixas etárias ou categorias de preços.</p>
        </section>

        <div class="flex-container">
            <section class="formulario-area">
                <form method="POST" action="">
                    <label>Disciplina:</label>
                    <input type="text" name="disciplina" placeholder="Ex: Programação Web" required>

                    <label>Nota 01:</label>
                    <input type="number" step="0.1" name="n1" min="0" max="10" required>

                    <label>Nota 02:</label>
                    <input type="number" step="0.1" name="n2" min="0" max="10" required>

                    <label>Nota 03:</label>
                    <input type="number" step="0.1" name="n3" min="0" max="10" required>

                    <button type="submit" name="media">Verificar Situação</button>
                </form>
            </section>
            
            <?php include 'resp2.php'; ?>
        </div>
    </main>

    <?php include '../includes/rodape.php'; ?>
</body>
</html>