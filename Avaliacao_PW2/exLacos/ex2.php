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
            <h2>Exercicio 02 - While - Caixa eletronico 20</h2>
            <p>
                Desenvovlva um programa que simule um caixa eletronico que trabalha só com multiplos de 20
            </p>
        </section>
        <div class="flex-container">
            <section class="formulario-area">
                <form method="POST" action="">
                    <label class="label-destaque">Escolha o quanto quer sacar</label><br/>
                    <input type="number" step="20" min="20" name="val" placeholder="R$200.00" required>
                    <button type="submit" name="enviar">Enviar</button>
                </form>
            </section>
            <?php include 'resp2.php'; ?>
        </div>
    </main>
    <?php include '../includes/rodape.php'; ?>
</body>
</html>