<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PW2 - Classificação de Triângulos</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <?php include '../includes/cabecalho.php'; ?>

    <main class="container-exercicio">
        <section class="enunciado">
            <h2>Exercício 05     - Classificação de Triângulos</h2>
            <p>Neste exercício, utilizamos a <strong>Estrutura Condicional Composta</strong> para verificar dois níveis de lógica: 
               primeiro, se as medidas podem formar um triângulo. Segundo, se ele é <strong>Equilátero</strong> (3 lados iguais), 
               <strong>Isósceles</strong> (2 lados iguais) ou <strong>Escaleno</strong> (todos os lados diferentes).</p>
        </section>

        <div class="flex-container">
            <section class="formulario-area">
                <form method="POST" action="">
                    <label>Lado A (cm):</label>
                    <input type="number" step="0.1" name="ladoA" placeholder="Ex: 10" required>

                    <label>Lado B (cm):</label>
                    <input type="number" step="0.1" name="ladoB" placeholder="Ex: 10" required>

                    <label>Lado C (cm):</label>
                    <input type="number" step="0.1" name="ladoC" placeholder="Ex: 10" required>

                    <button type="submit" name="analisar">Analisar Triângulo</button>
                </form>
            </section>
            
            <?php include 'resp5.php'; ?>
        </div>
    </main>

    <?php include '../includes/rodape.php'; ?>
</body>
</html>