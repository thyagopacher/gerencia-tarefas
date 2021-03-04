<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    
    include_once ("../../modelo/pessoa/modeloPessoa.php");
    include_once ("../../modelo/pessoa/Pessoa.php");  
    
    $variables  =   (strtolower($_SERVER['REQUEST_METHOD'])== 'GET') ? $_GET : $_POST;
    $pessoa     =   new Pessoa();
    foreach ($variables as $key => $value){
        $pessoa->$key = $value;
    }

    $mp     = new ModeloPessoa();
    $submit = $_REQUEST["submit"];
    $res    = "";
    
    if($submit != NULL){
        if($submit == "Inserir"){
            $res = $mp->inserir($pessoa);
        }else{
            if($submit == "Atualizar"){
                $res = $mp->atualizar($pessoa);
            }else{
                if($submit == "Excluir"){
                    $res = $mp->excluir($pessoa->codigo);
                }
            }
        }
        if($res != NULL && $res != ""){
            echo "<script>alert ('$res');</script>"; 
            echo "<script>location.href='/gerenciatarefa/visao/pessoa/gerenciaUsuario.php';</script>"; 
        }else{
            echo "<script>alert ('$submit com exito');</script>"; 
            echo "<script>location.href='/gerenciatarefa/visao/pessoa/gerenciaUsuario.php?codigo=$pessoa->codigo';</script>"; 
        }
    }

?>
