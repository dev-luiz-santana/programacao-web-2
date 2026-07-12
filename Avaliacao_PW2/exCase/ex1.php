<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 1</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <?php include '../includes/cabecalho.php'; ?>

    <main class="container-exercicio">
        <section class="enunciado">
            <h2>Exercicio 01 - Cores e significados</h2>
            <p>
                Crie um formulario onde o usuario escolha a cor que ele goste, após a seleção
                usando o switch case devera retornar o nome da cor e seu significados
            </p>
        </section>

        <div class="flex-container">
            <section class="formulario-area">
                <form method="POST" action="">     
                    <label class="label-destaque">informe sua cor preferida</label>
                    <div class="opcoes-group">
                        <label class="checkbox-item"><input type="radio" name="cor" value="preto">Preto</label><br/>
                        <label class="checkbox-item"><input type="radio" name="cor" value="azul">Azul</label><br/>
                        <label class="checkbox-item"><input type="radio" name="cor" value="amarelo">Amarelo</label><br/>
                        <label class="checkbox-item"><input type="radio" name="cor" value="branco">Branco</label><br/>
                    </div>
                    <button type="submit" name="enviar">Enviar</button>
                </form>
            </section>
            <?php include 'resp1.php'; ?>
        </div>
    </main>
    <?php include '../includes/rodape.php'; ?>
</body>
</html>