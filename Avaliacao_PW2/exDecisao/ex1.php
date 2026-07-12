<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PW2 - Condicional Simples</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <?php include '../includes/cabecalho.php'; ?>

    <main class="container-exercicio">
        <section class="enunciado">
            <h2>Exercício 05 - Verificação de Maioridade</h2>
            <p>O comando <strong>IF-ELSE</strong> funciona como uma tomada de decisão: se a condição for verdadeira, o PHP executa o primeiro bloco de código; 
               caso a condição seja falsa, o comando <strong>ELSE</strong> entra em ação executando um caminho alternativo. 
               É a base da lógica de programação para criar sistemas inteligentes que reagem a diferentes dados.</p>
        </section>

        <div class="flex-container">
            <section class="formulario-area">
                <form method="POST" action="">
                    <label>Nome do Usuário:</label>
                    <input type="text" name="nome" placeholder="Digite seu nome" required>

                    <label>Idade:</label>
                    <input type="number" name="idade" placeholder="Ex: 17" required>

                    <button type="submit" name="verificar">Verificar Idade</button>
                </form>
            </section>
            
            <?php include 'resp1.php'; ?>
        </div>
    </main>

    <?php include '../includes/rodape.php'; ?>
</body>
</html>