<section class="resultado-area">
    <?php
        echo "<div class='painel-resposta'>";
        if(isset($_POST['enviar'])){
            $opc = $_POST['opcs'];
            $numero = intval($_POST['num']);
            $i = 1;
            //util para ver se o valor chegou a variavel
            // var_dump($numero);
            // var_dump($opc);
            
            if($opc == "Tabuada"){
                echo "<b>Resultado<br><br></b>";
                while($i <= 10){
                    echo "$numero X $i = ".$numero* $i."<br>";
                    $i++;
                }
            }
            else{
                echo "<b>Resultado<br><br></b>";
                while($i <= $numero){
                    echo "$i".($i < $numero?"...":"");
                    $i++;
                }
            }
            
        }
        echo "</div>"
    ?>

</section>