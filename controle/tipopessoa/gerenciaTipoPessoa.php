<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    
    include("../../modelo/tipopessoa/modeloTipoPessoa.php");
    include("../../modelo/tipopessoa/TipoPessoa.php");  
    
    $variables  =   (strtolower($_SERVER['REQUEST_METHOD'])== 'GET') ? $_GET : $_POST;
    $tipopessoa      =   new TipoPessoa();
    foreach ($variables as $key => $value){
        $tipopessoa->$key = $value;
    }

    $mp             = new ModeloTipoPessoa();
    $submit         = $_REQUEST["submit"];
    $res            = "";
    
    if($submit != NULL){
        if($submit == "Inserir"){
            $res = $mp->inserir($tipopessoa);
        }else{
            if($submit == "Atualizar"){
                $res = $mp->atualizar($tipopessoa);
            }else{
                if($submit == "Excluir"){
                    $res = $mp->excluir($tipopessoa->codigo);
                }
            }
        }
        if($res != NULL && $res != ""){
            echo "<script>alert ('$res');</script>"; 
            echo "<script>location.href='/gerenciatarefa/visao/tipopessoa/gerenciaTipoPessoa.php';</script>"; 
        }else{
            echo "<script>alert ('$submit com exito o tipopessoa: $tipopessoa->nome');</script>"; 
            echo "<script>location.href='/gerenciatarefa/visao/tipopessoa/gerenciaTipoPessoa.php?nome=$tipopessoa->nome';</script>"; 
        }
    }

?>
