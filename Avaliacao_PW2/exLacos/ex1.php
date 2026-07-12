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
            <h2>Exercicio 01 - While - Tabuada ou Sequencia</h2>
            <p>
                Desenvovlva um programa onde o usuario digita um numero int qualquer que escolhe <br>
                exibir a tabuada do numero digitado ou uma sequencia prograsiva do zero até o numero escolhido <br>
                Utilizar o while
            </p>
        </section>
        <div class="flex-container">
            <section class="formulario-area">
                <form method="POST" action="">     
                    <label class="label-destaque">Digite um numero inteiro</label><br/>
                    <input type="number" name="num" required>
                    <label for="opcs">Escolha o que quer fazer</label>
                    <select name="opcs">
                        <option value="Tabuada">Gerar uma tabuada de 1 a 10</option>
                        <option value="Contagem">Gerar uma contagem</option>
                    </select>
                    <button type="submit" name="enviar">Enviar</button>
                </form>
            </section>
            <?php include 'resp1.php'; ?>
        </div>
    </main>
    <?php include '../includes/rodape.php'; ?>
</body>
</html>