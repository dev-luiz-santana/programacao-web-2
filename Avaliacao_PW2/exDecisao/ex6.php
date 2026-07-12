<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <?php include '../includes/cabecalho.php'; ?>

    <main class="container-exercicio">
        <section class="enunciado">
            <h2>Crie um script que peça a senha e login para o miseravel que quer logar nessa merda
                se a o login for "Admin", e a senha "senha 123", acesso permitido, se não, acesso negado
            </h2>
        </section>

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
            
            <?php include 'resp6.php'; ?>
        </div>
    </main>

    <?php include '../includes/rodape.php'; ?>
</body>
</html>