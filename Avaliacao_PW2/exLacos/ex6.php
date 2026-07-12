<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 6</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/estiloPista.css">
</head>
<body>
    <?php include '../includes/cabecalho.php'; ?>
    <main class="container-exercicio">
        <section class="enunciado">
            <h2>Exercicio 06 - For - Contagem regresiva</h2>
            <p>
                Desenvovlva um programa que simule o deslocamento de um automovel <br>
                o programa deve recerber o ponto inicial da pista em metros(minimo 0), e a distancia maxima que o veiculo deve percorrer(limite de 500) <br>
                usando for, incremente o tempo de 2 em 2 segundos, calculando a posição progressiva do veiculo até que ele atinja ou supere a distancia enviada <br>
            </p>
        </section>
        <div class="flex-container">
            <section class="formulario-area">
                <form method="POST" action="">
                    <label>Ponto de partida</label>
                    <input type="number" name="pontoPartida" min="0" max="50" required>
                    <label>Distancia maxima da reta (de 50 a 500 metros)</label>
                    <input type="number" name="distanciaMax" min="50" max="500" required>

                    <button type="submit" name="enviar">Calcular</button>
                </form>
            </section>
            <?php include 'resp6.php'; ?>
        </div>
    </main>
    <?php include '../includes/rodape.php'; ?>
</body>
</html>