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
            <h2>Exercício 01</h2>
            <p>Crie um programa que leia por atribuição direta um valor em reais 
                e converta para o dólar e para o euro considerando a data de cotação 
                do dia.</p>
        </section>

        <div class="flex-container">
            <section class="formulario-area">
                <form method="POST" action="">
                    <label>Data da Cotação:</label>
                    <input type="text" name="data" placeholder="Ex: 19/02/2026" required>

                    <label>Cotação do Dólar (US$):</label>
                    <input type="number" step="0.0001" name="cot_dolar" placeholder="Ex: 5.10" required>

                    <label>Cotação do Euro (€):</label>
                    <input type="number" step="0.0001" name="cot_euro" placeholder="Ex: 5.50" required>

                    <label>Valor em Reais (R$):</label>
                    <input type="number" step="0.01" name="valor_real" placeholder="Valor que você tem" required>

                    <button type="submit" name="enviar">Enviar Dados</button>
                </form>
            </section>
            <?php include 'resp1.php'; ?>
        </div>
    </main>
        <?php include '../includes/rodape.php'; ?>
</body>
</html>