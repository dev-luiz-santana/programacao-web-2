<?php
require_once 'conexao.php';
    
    if(isset($_FILES['imagem']) && $_FILES['imagem']['error'] === 0){
        $extensao = strtolower(pathinfo($_FILES['imagem']['name'],PATHINFO_EXTENSION));
        $extensaoPermitda = ['jpg','png','jpeg'];
        $nomeOriginal = $_FILES['imagem']['name'];

        if(in_array($extensao, $extensaoPermitda)){
            $nomeFoto = uniqid().".".$extensao;
            $dirDestino = "imgs/".$nomeFoto;

            move_uploaded_file($_FILES["imagem"]["tmp_name"], $dirDestino);

            if (Conexao::inserirImagem($nomeOriginal,$nomeFoto, $dirDestino)) {
                echo "<script>alert('Arquivo inserido no banco e na pasta!')</script>";               
            } 
            else{
               echo "<script>alert('Erro ao salvar no banco de dados.');</script>";
            }
          }
          else{
            echo "<script>alert('Erro ao mover!'); window.history.back();</script>";
            exit;
        }
}

    //vendo o nome original
    echo "<pre>";
    var_dump($nomeOriginal);
    echo "</pre>";

    //instanciar classe no php
    //Conexao::getConection

    /*if (Conexao::inserirImagem($nome, $diretorioDestino)) {
                  echo "<script>alert('Arquivo inserido no banco e na pasta!'); 
                   location.href='relatorio.php';</script>";
              } else {
                 echo "<script>alert('Erro ao salvar no banco de dados.');</script>";
              }
            }
       } else {
         echo "<script>alert('Erro ao mover!'); window.history.back();</script>";
         exit;
      }*/

?>