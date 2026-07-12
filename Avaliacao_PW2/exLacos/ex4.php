<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 2</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <?php include '../includes/cabecalho.php'; ?>
    <main class="container-exercicio">
        <section class="enunciado">
            <h2>Exercicio 04 - while - Juros compostos</h2>
            <p>
                Desenvovlva um programa que receba o valor de um investimento<br>
                a taxa percentual de rendimento mensal<br>
                e a quantidade de meses que o investimento vai durar<br> 
            </p>
        </section>
        <div class="flex-container">
            <section class="formulario-area">
                <form method="POST" action="">
                    <label>Valor inicial (R$)</label>
                    <input type="number" name="valorInicial" step="0.01" placeholder="ex: 1000" required>
                    <label>Taxa de juros mensal(%)</label>
                    <input type="number" name="taxa" step="0.1" placeholder="1.5, não colocar '%' " required>
                    <label>Período em meses</label>
                    <input type="number" name="periodo" placeholde="ex: 12" required>
                    <button type="submit" name="enviar">Simular rendimento</button>
                </form>
            </section>
            <?php include 'resp4.php'; ?>
        </div>
    </main>
    <?php include '../includes/rodape.php'; ?>
</body>
</html>