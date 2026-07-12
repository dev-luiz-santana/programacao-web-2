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
            <h2>Exercicio 03 - Relatório Mensal de Desempenho</h2>
            <p>Contexto: A gerência da loja precisa de um relatório detalhado para o fechamento do mês.<br>
             O sistema deve processar o desempenho individual de cada vendedor, detalhando as comissões <br>
             semanais e o resultado líquido para a empresa.<br>
            <br>
            <h2>O Desafio</h2> 
            <p>Crie uma página de relatório (relatorio_vendas.php) que contenha um formulário para <br>
            entrada de dados e, logo abaixo, utilize o include para exibir o processamento dos resultados.</p>
            <h2>Dados de Entrada</h2>
            <ul>
                <li>Identificação: Nome do Vendedor e Mês de Referência.</li>
                <li>Valores de Venda: Semana 1, Semana 2, Semana 3 e Semana 4.</li>
            </ul>
            <h2>Regras de Negócio (Processamento):</h2>
            <ul>
                <li>Comissão Semanal: O vendedor recebe 4% sobre o valor vendido em cada semana.</li>
                <li>Comissão Total: A soma das quatro comissões semanais.</li>
                <li>Custo Operacional: A loja possui um custo fixo de 20% sobre o total das vendas do mês.</li>
                <li>Lucro da Loja: Total de vendas menos (Comissão Total + Custo Operacional).</li>
            </ul>
        </section>
    <div class="flex-container">
        <section class="formulario-area">
            <a href="ex3.php" class="botao-link">IR PARA O FORMULÁRIO</a>
         </section>
      </div>         
    </main>
        <?php include '../includes/rodape.php'; ?>
</body>
</html>