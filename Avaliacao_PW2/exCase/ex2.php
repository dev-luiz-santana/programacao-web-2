<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <?php include '../includes/cabecalho.php'; ?>

    <main class="container-exercicio">
        <section class="enunciado">
            <h2>Exercicio 02 - Personalidade</h2>
            <p>
                Crie um formulario onde o usuario escolha o tipo de personalidade mais acredita ser
                entre colerico, melancolico, sanguineo e fleumatico<br/>
                deve exibir uma imagem que representa o tipo de personalidade
            </p>
        </section>

        <div class="flex-container">
            <section class="formulario-area">
                <form method="POST" action="">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome">
                    <label class="label-destaque">informe sua personalidade</label>
                    <div class="opcoes-group">
                        <label class="checkbox-item"><input type="radio" name="persona" value="Colérico">Colerico</label><br/>
                        <label class="checkbox-item"><input type="radio" name="persona" value="Melancólico">Melancolico</label><br/>
                        <label class="checkbox-item"><input type="radio" name="persona" value="Sanguíneo">Sanguíneo</label><br/>
                        <label class="checkbox-item"><input type="radio" name="persona" value="Fleumático">Fleumatico</label><br/>
                    </div>
                    <button type="submit" name="enviar">Enviar</button>
                </form>
            </section>
            <?php include 'resp2.php'; ?>
        </div>
    </main>
    <?php include '../includes/rodape.php'; ?>
</body>
</html>