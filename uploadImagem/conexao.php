<?php
class Conexao{
    public static function getConection(){
        $host = "localhost";
        $nomeBanco = "imagens";
        $user = "root";
        $pwd = "";

        try{
            $conexao = new PDO("mysql:host=$host;dbname=$nomeBanco;charset=utf8",$user,$pwd);
            //linha importante para armazenar o erro
            $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conexao;
        }
        catch(PDOException $e){
            die("Erro na conexão ".$e->getMessage());
        }
    }

    public static function inserirImagem($nomeO, $nome, $dir) {
        $pdo = self::getConection();
        $sql = "INSERT INTO imagens (nomeOriginal, nomeHash, diretorio) 
        VALUES (:noo, :nf, :dir)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':noo', $nomeO);
        $stmt->bindParam(':nf', $nome);
        $stmt->bindParam(':dir', $dir);
        return $stmt->execute();
    }
}
?>