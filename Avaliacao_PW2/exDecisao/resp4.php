<section class="resultado-area">
                <?php
                echo "<div class='painel-resposta'>";
                if(isset($_POST['calcular'])){
                    $nome = $_POST['nomeUser'];
                    $peso = $_POST['peso'];
                    $altura = $_POST['alt'];

                    $imc = $peso/($altura*$altura);

                    if($imc < 18.5){
                        echo "imc = ". number_format($imc,2,',','.') ." abaixo do peso";
                    }
                    elseif($imc >= 18.5 && $imc < 24.9){
                        echo "imc = ". number_format($imc,2,',','.') ." peso normal";
                    }
                    elseif($imc >= 24.9 && $imc < 29.9){
                        echo "imc = ". number_format($imc,2,',','.') ." excesso de peso";
                    }
                    elseif($imc >= 29.9 && $imc < 34.9){
                        echo "imc = ". number_format($imc,2,',','.') ." Obesidade grau I";
                    }
                    elseif($imc >= 34.9 && $imc < 39.9){
                        echo "imc = ". number_format($imc,2,',','.') ."Obesidade grau II";
                    }
                    else{
                        echo "imc = ". number_format($imc,2,',','.') ."Obesidade grau II";
                    }
                    

                }
                echo "</div>";
                ?>
            </section>