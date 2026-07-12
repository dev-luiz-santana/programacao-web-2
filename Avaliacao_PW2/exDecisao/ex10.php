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
            <h2>Exercicio 10</h2>
            <p>Desenvolva um formulario para recerber dados pessoais de um usuario(nome - email - telefone)
                e seus conhecimentos referentes a atualidade - sendo que o usuario podera escolher mais de uma opção
                Como saida na tela o programa devera exibir seus dados e uma lista de seus conhecimentos
            </p>
        </section>

        <div class="flex-container">
            <section class="formulario-area">
                <form method="POST" action="">
                    <label>Digite seu nome</label>
                    <input type="text" name="nome" required>
                    <label>Digite seu E-Mail</label>
                    <input type="email" name="email" required>
                    <label>Digite seu telefone</label>
                    <input type="number" name="telefone">         
                    <label class="label-destaque">informe seus conhecimentos</label>
                    <div class="opcoes-group">
                        <label class="checkbox-item"><input type="checkbox" name="opc1" value="Finanças"> Finanças e investimentos</label><br/>
                        <label class="checkbox-item"><input type="checkbox" name="opc2" value="Geopolitica"> Geopolitica e relações</label><br/>
                        <label class="checkbox-item"><input type="checkbox" name="opc3" value="Literatura"> Literatura e interpretação</label><br/>
                        <label class="checkbox-item"><input type="checkbox" name="opc4" value="Economia"> Economia e exatas</label><br/>
                    </div>
                    <button type="submit" name="enviar">Enviar</button>
                </form>
            </section>
            <?php include 'resp10.php'; ?>
        </div>
    </main>
    <?php include '../includes/rodape.php'; ?>
</body>
</html>