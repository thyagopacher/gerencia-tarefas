<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    
    include_once ("../../modelo/contas/modeloConta.php");
    include_once ("../../modelo/contas/Conta.php");  
    
    $variables  =   (strtolower($_SERVER['REQUEST_METHOD'])== 'GET') ? $_GET : $_POST;
    $conta     =   new Conta();
    foreach ($variables as $key => $value){
        $conta->$key = $value;
    }

    $mp     = new ModeloConta();
    $submit = $_REQUEST["submit"];
    $res    = "";
    
    if($submit != NULL){
        if($submit == "Inserir"){
            $res = $mp->inserir($conta);
        }else{
            if($submit == "Atualizar"){
                $res = $mp->atualizar($conta);
            }else{
                if($submit == "Excluir"){
                    $res = $mp->excluir($conta->codigo);
                }
            }
        }
        if($res != NULL && $res != ""){
            echo "<script>alert ('$res');</script>"; 
            echo "<script>location.href='/gerenciatarefa/visao/contas/gerenciaConta.php';</script>"; 
        }else{
            echo "<script>alert ('$submit com exito');</script>"; 
            echo "<script>location.href='/gerenciatarefa/visao/contas/gerenciaConta.php?codigo=$conta->codigo';</script>"; 
        }
    }

?>
