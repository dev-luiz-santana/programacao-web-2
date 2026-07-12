<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <?php include '../includes/cabecalho.php'; ?>

    <main class="container-exercicio">
        <section class="enunciado"></section>
        <div class="flex-container">
            <section class="formulario-area">
                <form method="POST" action="">
                    <label>Login</label>
                    <input type="text" name="login" required>

                    <label>Senha</label>
                    <input type="password" name="senha" required>

                    <button type="submit" name="logar">Logar</button>
                </form>
            </section>
            <?php include 'resp11.php'; ?>
        </div>
    </main>

    <?php include '../includes/rodape.php'; ?>
</body>
</html>