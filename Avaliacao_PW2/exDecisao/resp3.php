<section class="resultado-area">
                <?php
                echo "<div class='painel-resposta'>";
                if (isset($_POST['enviar'])) {

                $num1 = $_POST ['num1'];
                $num2 = $_POST ['num2'];
                $soma = $_POST ['operacao'];
                $divisao = $_POST ['operacao'];
                $subtracao = $_POST ['operacao'];
                $multiplicao = $_POST ['operacao'];
                
                if ($_POST['operacao'] == 'soma'){
                    
                    $soma = $num1+$num2;
                    echo "O resultado da soma é: $soma";


                 }
                elseif ($_POST['operacao'] == 'subtracao'){
                    $subtracao = $num1-$num2;
                    echo "O resultado da subtração é: $subtracao";
                }
                
                elseif ($_POST['operacao'] == 'multiplicacao'){
                    $multiplicacao = $num1*$num2;
                    echo "O resultado multiplicação é: $multiplicacao";
                }
                else{
                    $divisao = $num1/$num2;
                    echo "O resultado divisão é: $divisao";
                }
                    
                }
                ?>
            </section>