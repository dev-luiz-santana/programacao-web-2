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
            <h2>Area admin</h2>
            <p>
                <?php
                    session_start();
                    echo "<h3> Usuario: ".$_SESSION['user']."</h3>";
                ?>
                <h3>Senha: <strong id="senha">******</strong><br/><button id="btnSenha" onclick="mostrarSenha()">Clique para mostrar a senha</button></h3><br><hr><br>
            </p>
        </section>
        <div class="flex-container">
            <form method="post" action="">
                <section class="formulario-area">
                    <fieldset id="linguagens"><legend><strong>Protocolos de segurança</strong></legend>
                        <input type="checkbox" name="seguranca[]" value="Autenticação de dois fatores" id="idAuth"><label for="idAuth"> Autenticação de dois fatores</label><br/>
                        <input type="checkbox" name="seguranca[]" value="Validação por QRcode" id="idQR"><label for="idQR"> Validação por QRcode</label><br/>
                        <input type="checkbox" name="seguranca[]" value="Implantação LGPD" id="idLGPD"><label for="idLGPD"> Implantação LGPD</label><br/>
                    </fieldset>
                    <button type="submit" name="enviar">Aplicar</button>
                </section>
            </form>
            <?php include 'resp11-2.php'; ?>
            <script src="JS/script.js"></script>
        </div>
    </main>
    <?php include '../includes/rodape.php'; ?>
</body>
</html>