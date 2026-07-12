<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PW2 - Cálculo de IMC</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <?php include '../includes/cabecalho.php'; ?>

    <main class="container-exercicio">
        <section class="enunciado">
            <h2>Exercício 04 - Índice de Massa Corporal (IMC)</h2>
            <p>Crie um programa que receba o peso e a altura de uma pessoa, calcule o IMC 
               e informe a classificação de acordo com a tabela da OMS.</p>
        </section>

        <div class="flex-container">
            <section class="formulario-area">
                <form method="POST" action="">
                    <label>Seu Nome:</label>
                    <input name="nomeUser" type="text" required>
                    <label>Peso (kg):</label>
                    <input name="peso" type="number" step="0.01" required placeholder="ex: 58,5">
                    <label>Altura (m):</label>
                    <input name="alt" type="number" step="0.01" required placeholder="ex 1,75">
                    <button type="submit" name="calcular">Calcular IMC</button>
                </form>
            </section>
            
            <?php include 'resp4.php'; ?>
        </div>
    </main>

    <?php include '../includes/rodape.php'; ?>
</body>
</html>