<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PW2 - Calculadora Interativa</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <?php include '../includes/cabecalho.php'; ?>

    <main class="container-exercicio">
        <section class="enunciado">
            <h2>Exercício 03 - Calculadora PHP</h2>
            <p>Neste exercício, utilizamos a <strong>Estrutura Condicional Composta</strong><br> 
            para identificar qual operação matemática o usuário deseja realizar.<br>
            O valor selecionado no menu suspenso (<code>select</code>) determina qual bloco de código <br>
            será executado para processar os números digitados.</p>
        </section>

        <div class="flex-container">
            <section class="formulario-area">
                <form method="POST" action="">
                     <label>PRIMEIRO NUMERO:</label>
                     <input type="number" name="num1" required>
                  
                     <label>Operação:</label>
                    
                        <select name="operacao" required style="width: 100%; padding: 10px; margin-top: 5px;">
                            <option value="soma">Soma (+)</option>
                            <option value="subtracao">Subtração (-)</option>
                            <option value="multiplicacao">Multiplicação (x)</option>
                            <option value="divisao">Divisão (÷)</option>
                        </select>
                    <label>Segundo Número:</label>
                    <input type="number" name="num2" required>
                    <button type="submit" name="enviar">Calcular Agora</button>
                </form>
            </section>
            
            <?php include 'resp3.php'; ?>
        </div>
    </main>

    <?php include '../includes/rodape.php'; ?>
</body>
</html>