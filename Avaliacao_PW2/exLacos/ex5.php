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
            <h2>Exercicio 05 - For - Mapeamento de Poltronas</h2>
            <p>
                Desenvovlva um programa que mapeie a disposição dos assentos no onibus<br>
                O formulario devera coletar a quantidade total de assentos<br>
                se for par, exiba "assento lado corredor"<br>
                se for impar exiba  "assento lado janela"
            </p>
        </section>
        <div class="flex-container">
            <section class="formulario-area">
                <form method="POST" action="">
                    <label>Quantidade de assentos</label>
                    <input type="number" name="quantAssento" min="1" max="68" required>
                   
                    <button type="submit" name="enviar">Mapear</button>
                </form>
            </section>
            <?php include 'resp5.php'; ?>
        </div>
    </main>
    <?php include '../includes/rodape.php'; ?>
</body>
</html>