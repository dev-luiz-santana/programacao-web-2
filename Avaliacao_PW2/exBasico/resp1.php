<section class="resultado-area">
                <?php
                if (isset($_POST['enviar'])) {
                    $data = $_POST['data'];
                    $cot_dolar = $_POST['cot_dolar'];
                    $cot_euro = $_POST['cot_euro'];
                    $valor_real = $_POST['valor_real'];

                    // Cálculos de conversão
                    $res_dolar = $valor_real / $cot_dolar;
                    $res_euro = $valor_real / $cot_euro;

                    echo "<div class='painel-resposta'>";
                    echo "<h3>Resultado da Conversão</h3>";
                    echo "<p>Na data <strong>$data</strong>, você informou que tem:</p>";
                    echo "<h2>R$ " . number_format($valor_real, 2, ',', '.') . "</h2>";
                    echo "<hr style='margin: 15px 0; border: 0; border-top: 1px solid #ddd;'>";
                    echo "<p>Convertido em Dólar: <strong>US$ " . number_format($res_dolar, 2, ',', '.') . "</strong></p>";
                    echo "<p>Convertido em Euro: <strong>€ " . number_format($res_euro, 2, ',', '.') . "</strong></p>";
                    echo "</div>";
                }
                ?>
            </section>