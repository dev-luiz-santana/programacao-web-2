<section class="resultado-area">
    <?php
        echo "<div class='painel-resposta'>";
        if(isset($_POST['enviar'])){
            $investimento = floatval($_POST['valorInicial']);
            $taxa = floatval($_POST['taxa']/100);
            $duracao = intval($_POST['periodo']);

            //var_dump($duracao);
            //var_dump($investimento);
            //var_dump($taxa);

            echo "<h3>Resultado da simulação</h3>";
            echo '<table class="tabelaInvestimento">
                    <tr id="linha">
                        <th id="mes" >Mes</th>
                        <th id="saldo">Saldo Final</th>
                    </tr>';
                

            $mesAtual = 1;

            while($mesAtual <= $duracao){
                $juros = $investimento * $taxa;
                $investimento+=$juros;

                echo "<tr>
                    <td id='mesAtual'>$mesAtual</td>
                    <td id='investimentoAtual'>".number_format($investimento,2,'.',',')."</td>
                </tr>";

                $mesAtual++;
            }          
            echo '</table>'; 
            echo "<h2>Resultado final: ".number_format($investimento,2,'.',',')."</h2>";  
        }
        echo "</div>"
    ?>
</section>