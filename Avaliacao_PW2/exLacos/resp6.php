<section class="resultado-area">
    <?php
    if (isset($_POST['enviar'])) {
        $posicaoInicial = intval($_POST['pontoPartida']);
        $distanciaLimite = intval($_POST['distanciaMax']);
        
        $posicaoAtual = $posicaoInicial;
        $velocidadePorPasso = 20; 
        $tempoTotalSegundos = 0;
        $totalDePassos = 0; // Contador para controlar os quadros da animação CSS

        echo "<div class='painel-resposta'>";
        echo "<h3>Movimentação de veiculo com laço FOR</h3>";
        
        echo "<div style='background: #f4f4f4; padding: 12px; border-radius: 4px; font-size: 0.9rem; max-height: 180px; overflow-y: auto; text-align: left; margin-bottom: 15px;'>";
        echo "<strong>Início do Teste:</strong> Veículo posicionado no marco de " . $posicaoAtual . " metros.<br>";

        // Laço FOR para calcular a progressão e contar os passos
        for ($segundos = 2; $posicaoAtual < $distanciaLimite; $segundos += 2) {
            
            $posicaoAtual += $velocidadePorPasso;
            $tempoTotalSegundos = $segundos; 
            $totalDePassos++; // Incrementa um quadro a cada 2 segundos

            if ($posicaoAtual > $distanciaLimite) {
                $posicaoAtual = $distanciaLimite;
            }

            echo "Tempo: " . str_pad($segundos, 2, "0", STR_PAD_LEFT) . "s | Posição: " . $posicaoAtual . " metros<br>";
        }

        echo "<strong>Fim da Reta:</strong> Limite alcançado em " . $tempoTotalSegundos . " segundos.<br>";
        echo "</div>";

        // Proporção visual dentro do limite da pista (0% a 80% da largura)
        $porcentagemInicial = ($posicaoInicial / 500) * 80;
        $porcentagemFinal = ($posicaoAtual / 500) * 80;

        // Injeção de estilo dinâmico com controle de tempo por passos (steps)
        echo "<style>
            @keyframes moverCarro {
                0% { left: " . $porcentagemInicial . "%; }
                100% { left: " . $porcentagemFinal . "%; }
            }
            .animacao-veiculo {
                O 'steps' divide a animação em segmentos idênticos ao cálculo do laço FOR 
                animation: moverCarro " . $tempoTotalSegundos . "s steps(" . $totalDePassos . ") forwards;
            }
        </style>";

        echo "<h4>Simulação Visual do Percurso (" . $tempoTotalSegundos . "s):</h4>";
        echo "<div class='pista-container'>";
        
        echo "<img src='../img/6a10b585ddd15.jpg' 
                   class='veiculo-teste animacao-veiculo' 
                   alt='Automóvel de Teste' 
                   title='Posição Final: " . $posicaoAtual . "m'>";
                   
        echo "</div>"; 
        
        echo "</div>";
    }
    ?>
</section>
<?php
        /*
        RESP2.PHP

<section class="resultado-area">
    <?php
    if (isset($_POST['simular'])) {
        $posicaoInicial = intval($_POST['pontoPartida']);
        $distanciaLimite = intval($_POST['distanciaMax']);
        
        $posicaoAtual = $posicaoInicial;
        $velocidadePorPasso = 20; 
        $tempoTotalSegundos = 0;
        $totalDePassos = 0; // Contador para controlar os quadros da animação CSS

        echo "<div class='painel-resposta'>";
        echo "<h3>Movimentação de veiculo com laço FOR</h3>";
        
        echo "<div style='background: #f4f4f4; padding: 12px; border-radius: 4px; font-size: 0.9rem; max-height: 180px; overflow-y: auto; text-align: left; margin-bottom: 15px;'>";
        echo "<strong>Início do Teste:</strong> Veículo posicionado no marco de " . $posicaoAtual . " metros.<br>";

        // Laço FOR para calcular a progressão e contar os passos
        for ($segundos = 2; $posicaoAtual < $distanciaLimite; $segundos += 2) {
            
            $posicaoAtual += $velocidadePorPasso;
            $tempoTotalSegundos = $segundos; 
            $totalDePassos++; // Incrementa um quadro a cada 2 segundos

            if ($posicaoAtual > $distanciaLimite) {
                $posicaoAtual = $distanciaLimite;
            }

            echo "Tempo: " . str_pad($segundos, 2, "0", STR_PAD_LEFT) . "s | Posição: " . $posicaoAtual . " metros<br>";
        }

        echo "<strong>Fim da Reta:</strong> Limite alcançado em " . $tempoTotalSegundos . " segundos.<br>";
        echo "</div>";

        // Proporção visual dentro do limite da pista (0% a 80% da largura)
        $porcentagemInicial = ($posicaoInicial / 500) * 80;
        $porcentagemFinal = ($posicaoAtual / 500) * 80;

        // Injeção de estilo dinâmico com controle de tempo por passos (steps)
        echo "<style>
            @keyframes moverCarro {
                0% { left: " . $porcentagemInicial . "%; }
                100% { left: " . $porcentagemFinal . "%; }
            }
            .animacao-veiculo {
                O 'steps' divide a animação em segmentos idênticos ao cálculo do laço FOR 
                animation: moverCarro " . $tempoTotalSegundos . "s steps(" . $totalDePassos . ") forwards;
            }
        </style>";

        echo "<h4>Simulação Visual do Percurso (" . $tempoTotalSegundos . "s):</h4>";
        echo "<div class='pista-container'>";
        
        echo "<img src='../img/carro.png' 
                   class='veiculo-teste animacao-veiculo' 
                   alt='Automóvel de Teste' 
                   title='Posição Final: " . $posicaoAtual . "m'>";
                   
        echo "</div>"; 
        
        echo "</div>";
    }
    ?>
</section>


ESTILO SEPARADO (ATENÇÃO O ARQUIVO JA ESTA INCLUIDO NO CORPO DO EX2.PHP) É SÓ SALVAR O ARQUIVO

==========================================================================
   ESTILIZAÇÃO DA PISTA DE TESTES (EXERCÍCIO 02)- FOR
   ========================================================================== 

.pista-container {
    position: relative;
    width: 100%;
    height: 100px;
    background-color: #333333;
    border-top: 4px dashed #ffffff;
    border-bottom: 4px dashed #ffffff;
    margin-top: 20px;
    border-radius: 4px;
    overflow: hidden;
    display: flex;
    align-items: center;
}

.pista-container::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 2px;
    background: repeating-linear-gradient(90deg, #ffcc00, #ffcc00 20px, transparent 20px, transparent 40px);
    top: calc(50% - 1px);
    z-index: 1;
}

.veiculo-teste {
    position: absolute;
    width: 75px;
    height: auto;
    z-index: 2;
    bottom: 15px;
} 
    ?>

</section>

*/

?>