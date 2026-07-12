<section class="resultado-area">
            <?php
                echo "<div class='painel-resposta'>";
                if(isset($_POST['analisar'])){
                    $ladoA = $_POST['ladoA'];
                    $ladoB = $_POST['ladoB'];
                    $ladoC = $_POST['ladoC'];
                    $raiz = "/PW2/Avaliacao_PW2/img/";
                    //checando se o triangulo é valido
                    if($ladoC < $ladoA+$ladoB && $ladoA < $ladoB+$ladoC && $ladoB < $ladoA+$ladoC){
                        //check do equilatero
                        if($ladoA == $ladoB && $ladoB == $ladoC && $ladoC == $ladoA){
                            $arquivo = "equilatero.png";
                            echo "é um triangulo Equilátero";
                        }
                        //check do isosceles
                        elseif($ladoA == $ladoB || $ladoB == $ladoC || $ladoC == $ladoA){
                            $arquivo = "isosceles.png";
                            echo "é um triangulo Isósceles";
                        }
                        //check do escaleno
                        else{
                            $arquivo = "escaleno.png";
                            echo "é um triangulo Escaleno";
                        }
                        echo "<br/><img src='{$raiz}{$arquivo}' width='200'>";
                    }
                    else{
                        $arquivo = "naotriangulo.png";
                        echo"triangulo invalido";
                        echo "<br/><img src='{$raiz}{$arquivo}' width='200'>";
                    }
                }
                echo "</div>";
            ?>
</section>