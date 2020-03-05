<?php
    session_start();
    require_once "app/dados.model.php";
    require_once "app/dados.service.php";
    require_once "app/conexao.php";

    $dados = new Dados();
    $conexao = new Conexao();
    $dadosService = new DadosService($conexao, $dados);

    if(isset($_POST["action"]) and !empty($_POST["action"])){
        $action = $_POST["action"];
    }

    if($action=="upload"){
        $file = $_FILES["file"];
        if($file["type"]<>"text/plain"){
            header('Location: index.php?upload=error');
        }

        $file = file_get_contents($file["tmp_name"]);
        $file = explode("\n", $file);

        foreach ($file as $key => $linha) {
            $linha = explode(";", $linha);
            if (count($linha)==7) {
                $dados->__set("temperatura",$linha[0]);
                $dados->__set("humidade",$linha[1]);
                $dados->__set("orvalho",$linha[2]);
                $dados->__set("luz",$linha[3]);
                $dados->__set("latitude",$linha[4]);
                $dados->__set("longitude",$linha[5]);
                $dados->__set("dt_coleta",$linha[6]);

                $result = $dadosService->inserir();
                if($result){
                    header('Location: index.php?upload=success');
                }
                else{
                    header('Location: index.php?upload=error');
                }
                
            }
                    
        }
    }

    if($action=="recupera"){
        $dados = $dadosService->recuperar();
        // echo "<pre>";
        // print_r($dados);
        // echo "</pre>";
        echo json_encode($dados);
    }



    

?>