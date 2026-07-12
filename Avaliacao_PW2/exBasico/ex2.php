<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PW2 - Conversão de Moedas</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <?php include '../includes/cabecalho.php'; ?>

    <main class="container-exercicio">
        <section class="enunciado">
            <h2>Exercício 02 - Cálculo de Venda de Veículo</h2>
            <p>Com base no custo de produção, calcule o preço final de venda considerando os percentuais informados de impostos, logística e documentação.</p>
        </section>

        <div class="flex-container">
            <section class="formulario-area">
                <form method="POST" action="exercicio2.php">
                    <label>Custo de Produção (R$):</label>
                    <input type="number" step="0.01" name="custo_prod" placeholder="Ex: 15000" required>

                    <label>% de Impostos:</label>
                    <input type="number" step="0.1" name="perc_imposto" placeholder="Ex: 40" required>

                    <label>% de Logística:</label>
                    <input type="number" step="0.1" name="perc_logistica" placeholder="Ex: 25" required>

                    <label>% de Documentação:</label>
                    <input type="number" step="0.1" name="perc_doc" placeholder="Ex: 10" required>

                    <button type="submit" name="calcular">Calcular Venda</button>
                </form>
            </section>
            <?php include 'resp1.php'; ?>
        </div>
    </main>
        <?php include '../includes/rodape.php'; ?>
</body>
</html>