<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Impar ou par</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <?php include '../includes/cabecalho.php'; ?>

    <main class="container-exercicio">
        <section class="enunciado">
            <h2>Crie um script que informa se o número é ímpar ou par.</h2>
        </section>

        <div class="flex-container">
            <section class="formulario-area">
                <form method="POST" action="">
                    <label>Número</label>
                    <input type="number" name="numero" required>


                    <button type="submit" name="descobrir">Descobrir</button>
                </form>
            </section>
            
            <?php include 'resp7.php'; ?>
        </div>
    </main>

    <?php include '../includes/rodape.php'; ?>
</body>
</html>