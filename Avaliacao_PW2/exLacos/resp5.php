<section class="resultado-area">
    <?php
        echo "<div class='painel-resposta'>";
        if(isset($_POST['enviar'])){
            $quantAssento = intval($_POST['quantAssento']);

            //var_dump($quantAssento);

            echo "<h3>Resultado do mapeamento</h3>";
            echo '<table class="tabelaInvestimento">
                    <tr id="linha">
                        <th id="mes" >Numero Assento</th>
                        <th id="saldo">Posição</th>
                    </tr>';

            for($i = 1;$i <= $quantAssento;$i++){
                if($i % 2 === 0){
                    //echo "Assento do lado do corredor <br>";
                    echo "<tr style='background-color: #ccc'>
                    <td id='mesAtual'>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
                    <td id='investimentoAtual'>Assento do lado do corredor</td>
                </tr>";
                }
                else{
                    //echo "Assento do lado da Janela <br>";
                    echo "<tr style='background-color: #dd'>
                    <td id='mesAtual'>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
                    <td id='investimentoAtual'>Assento do lado da janela</td>
                </tr>";
                }
            }
            echo '</table>'; 
        }
        echo "</div>"
    ?>

</section>