<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PW2 - Exercícios</title>
    <!-- link para acesso ao estilo css-->
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <?php include 'includes/cabecalho.php'; ?>

    <main class="container-exercicio">
        <section class="enunciado">
             <h2>AVALIAÇÃO PW2 - PROGRAMAÇÃO WEB 2</h2><br>. 
               <p>Esta é sua primeira avaliação, a formatação já esta pronta, mas é obrigatorio editar o CSS, 
                alterando pelo menos as cores de fundo e logotipo. </p><br>
               <strong>RESPONDER AS PERGUNTAS ABAIXO</strong><br>
              
               <p><strong>1. Processamento: </strong> Qual é a principal diferença entre a programação do lado do servidor (Server-side),
               como o PHP, e a programação do lado do cliente (Client-side), como o JavaScript?
               Resposta:<br>o php não tem opção para o usuario digitar dados diretamente, ele apenas processa os dados que foram fornecidos pelo formulario preenchido pelo usuario</p>.
                <br>
               <p><strong>2. Persistência de Dados: </strong>Ao preencher um formulário e clicar em "Enviar", para onde vão esses dados e quem
               é o responsável por processar os cálculos: o navegador do usuário ou o servidor? Resposta<br/>Os dados colocados pelo usuário vão para o servidor</p>
                <br>
               <p><strong>3. Segurança nos Métodos:</strong> Na transmissão de dados de um formulário, qual a diferença visual e de segurança 
                entre o método GET e o método POST? Resposta<br/>Metodo GET é usado para recuperar dados, POST para enviar dados</p>
                <br>
        </section>
    </main>
    <?php include 'includes/rodape.php'; ?>

</body>
</html>