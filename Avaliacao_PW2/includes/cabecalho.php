<?php $raiz = "/PW2/Avaliacao_PW2/";

?>
<header class="main-header">
    <div class="logo">
        <img src="<?php echo $raiz;?>img/php_logo.png" alt="Logo PW2" width="200">
    </div>
      <!--tirei a div titulo-->
    <nav class="menu">
        <ul>
            <li><a href="<?php echo $raiz;?>index.php">Voltar</a></li>
             <li class="dropdown">
                <a href="#" class="dropbtn">Exercicios basicos</a>
                <ul class="dropdown-content">
                    <li><a href="<?php echo $raiz;?>exBasico/ex1.php">1 - Conversão Reais para Dólar e Euro</a></li>
                    <li><a href="<?php echo $raiz;?>exBasico/ex2.php">2 - Custo de Produção</a></li>
                    <li><a href="<?php echo $raiz;?>exBasico/ex3enunciado.php">3 - Relatório de Vendas e Lucro</a></li>
                </ul>
            </li>

            <!--2 menu dropdown-->
            <li class="dropdown">
                <a href="#" class="dropbtn">Estrutura decisão</a>
                <ul class="dropdown-content">
                    <li><a href="<?php echo $raiz;?>exDecisao/ex1.php">1 - Maior idade</a></li>
                    <li><a href="<?php echo $raiz;?>exDecisao/ex2.php">2 - Boletim e Media</a></li>
                    <li><a href="<?php echo $raiz;?>exDecisao/ex3.php">3 - Calculadora</a></li>
                    <li><a href="<?php echo $raiz;?>exDecisao/ex4.php">4 - IMC</a></li>
                    <li><a href="<?php echo $raiz;?>exDecisao/ex5.php">5 - Calculo Triângulo</a></li>
                    <li><a href="<?php echo $raiz;?>exDecisao/ex6.php">6 - Verificar senhas</a></li>
                    <li><a href="<?php echo $raiz;?>exDecisao/ex7.php">7 - Par ou impar</a></li>
                    <li><a href="<?php echo $raiz;?>exDecisao/ex8.php">8 - Verificar Positivo,Negativo,Nulo</a></li>
                    <li><a href="<?php echo $raiz;?>exDecisao/ex9.php">9 - Seleção multipla</a></li>
                    <li><a href="<?php echo $raiz;?>exDecisao/ex10.php">10 - Seleção multipla 2</a></li>
                    <li><a href="<?php echo $raiz;?>exDecisao/ex11.php">11 - Exercicio 11</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Switch Case</a>
                <ul class="dropdown-content">
                    <li><a href="<?php echo $raiz;?>exCase/ex1.php">1 - Cores e significados</a></li>
                    <li><a href="<?php echo $raiz;?>exCase/ex2.php">2 - Personalidades</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"class="dropbtn">Laços de repetição (while/for)</a>
                <ul class="dropdown-content">
                    <li><a href="<?php echo $raiz;?>exLacos/ex1.php">1 - While - incremento tabuada</a></li>
                    <li><a href="<?php echo $raiz;?>exLacos/ex2.php">2 - While - Caixa eletronico com multiplos de 20</a></li>
                    <li><a href="<?php echo $raiz;?>exLacos/ex3.php">3 - While - Caixa eletronico com multiplos de 50</a></li>
                    <li><a href="<?php echo $raiz;?>exLacos/ex4.php">4 - While - Juros compostos</a></li>
                    <li><a href="<?php echo $raiz;?>exLacos/ex5.php">5 - For - Mapeamento de Poltronas</a></li>
                    <li><a href="<?php echo $raiz;?>exLacos/ex6.php">6 - For - Contagem regresiva</a></li>
                </ul>
            </li>
      </ul>
    </nav>
</header>  