<?php

class DadosService{
    private $conexao;
    private $dados;

    public function __construct(Conexao $conexao, Dados $dados){
        $this->conexao = $conexao->conectar();
        $this->dados = $dados;
    }

    public function inserir(){
        $query = "insert into dados 
                (temperatura,humidade,orvalho,luz,latitude,longitude,dt_coleta) 
                values 
                (:temperatura,:humidade,:orvalho,:luz,:latitude,:longitude,:dt_coleta);";

        $insert = $this->conexao->prepare($query);
        $insert->bindParam(":temperatura", $this->dados->__get("temperatura"));
        $insert->bindParam(":humidade", $this->dados->__get("humidade"));
        $insert->bindParam(":orvalho", $this->dados->__get("orvalho"));
        $insert->bindParam(":luz", $this->dados->__get("luz"));
        $insert->bindParam(":latitude", $this->dados->__get("latitude"));
        $insert->bindParam(":longitude", $this->dados->__get("longitude"));
        $insert->bindParam(":dt_coleta", $this->dados->__get("dt_coleta"));
        return $insert->execute();


    }

    public function recuperar(){
        $query = "select * from dados;";

        $consulta = $this->conexao->prepare($query);
        $consulta->execute();

        return $consulta->fetchall(PDO::FETCH_OBJ);
    }

    public function atualizar(){
        
    }

    public function remover(){
        
    }

}


?>