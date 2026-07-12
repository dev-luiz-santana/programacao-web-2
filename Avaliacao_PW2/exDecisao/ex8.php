<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício Positivo, negativo, nulo</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <?php include '../includes/cabecalho.php'; ?>

    <main class="container-exercicio">
        <section class="enunciado">
            <h2>Exercício 08 - Descubra se o número é positivo, negativo ou nulo</h2>
            <p>Neste exercício, insira um número e descubra se ele é <strong>Positivo</strong>, <strong>Negativo</strong> ou <strong>nulo</strong></p>
        </section>

        <div class="flex-container">
            <section class="formulario-area">
                <form method="POST" action="">
                    <label>Insira um número</label>
                    <input type="number" step="" name="num" placeholder="Ex: 0" required>

                    <button type="submit" name="classificar">Classificar</button>
                </form>
            </section>
            
            <?php include 'resp8.php'; ?>
        </div>
    </main>

    <?php include '../includes/rodape.php'; ?>
</body>
</html>