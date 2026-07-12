<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PW2 - RELATORIO VENDA E LUCRO</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

      <?php include '../includes/cabecalho.php'; ?>

    <main class="container-exercicio">
        <section class="enunciado">
            <h2>Exercício 03 - AVALIAÇÃO - crie seu formulario</h2>
             <h2>Descubra o lucro da empresa</h2>
            
        </section>

        <div class="flex-container">
            <section class="formulario-area">
                <form method="POST" action="">
                    <label>Nome</label>
                    <input type="text" name="nomeUser" placeholder="insira seu nome" required>
                    <label>Mês</label>
                    <input type="text" name="mes" placeholder="insira o mês" required>
                    <label>Semana 1</label>
                    <input type="text" name="semana1" placeholder="Valor da semana 1" required>
                    <label>Semana 2</label>
                    <input type="text" name="semana2" placeholder="Valor da semana 2" required>
                    <label>Semana 3</label>
                    <input type="text" name="semana3" placeholder="Valor da semana 3" required>
                    <label>Semana 4</label>
                    <input type="text" name="semana4" placeholder="Valor da semana 4" required>
                    <br>                    
                    <button type="submit" name="send">ENVIAR DADOS</button>
                </form>
            </section>
            <?php include 'resp3.php'; ?>
        </div>
    </main>
        <?php include '../includes/rodape.php'; ?>
</body>
</html>