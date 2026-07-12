<section class="resultado-area">
                <?php
                if (isset($_POST['send'])) {
                  $sem1  = $_POST['semana1'];
                  $sem2 = $_POST['semana2'];
                  $sem3 = $_POST['semana3'];
                  $sem4 = $_POST['semana4'];
                  $name = $_POST['nomeUser'];
                  $month = $_POST['mes'];
                  
                    $vendedor = $sem1*0.04 + $sem2*0.04 + $sem3*0.04 + $sem4*0.04;

                    $custo = ($sem1 + $sem2 + $sem3 + $sem4) * 0.20;

                    $total = $sem1 + $sem2 + $sem3 + $sem4;

                  $lucro =  $total - ($vendedor + $custo);

                  echo "<div class='painel-resposta'>";
                  echo "<h3>Seus dados</h3>";
                  echo "<p>Nome do vendedor <strong>$name</strong></p>";
                  echo "<p>Mês <strong>$month</strong></p>";
                  echo "<h2>Sua comissão foi " . number_format($vendedor, 2, ',', '.') . "</h2>";
                  echo "<h2>O custo da loja foi de R$ " . number_format($custo, 2, ',', '.') . "</h2>";
                  echo "<h2>O lucro obtido foi de R$ " . number_format($lucro, 2, ',', '.') . "</h2>";
                  echo "</div>";                
                  
                }
                ?>
            </section>