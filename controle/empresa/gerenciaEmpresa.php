<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    
    include_once ("../../modelo/empresa/modeloEmpresa.php");
    include_once ("../../modelo/empresa/Empresa.php");  
    
    $variables  =   (strtolower($_SERVER['REQUEST_METHOD'])== 'GET') ? $_GET : $_POST;
    $empresa     =   new Empresa();
    foreach ($variables as $key => $value){
        $empresa->$key = $value;
    }

    $mp     = new ModeloEmpresa();
    $submit = $_REQUEST["submit"];
    $res    = "";
    
    if($submit != NULL){
        if($submit == "Inserir"){
            $res = $mp->inserir($empresa);
        }else{
            if($submit == "Atualizar"){
                $res = $mp->atualizar($empresa);
            }else{
                if($submit == "Excluir"){
                    $res = $mp->excluir($empresa->codigo);
                }
            }
        }
        if($res != NULL && $res != ""){
            echo "<script>alert ('$res');</script>"; 
            echo "<script>location.href='/gerenciatarefa/visao/empresa/gerenciaEmpresa.php';</script>"; 
        }else{
            echo "<script>alert ('$submit com exito');</script>"; 
            echo "<script>location.href='/gerenciatarefa/visao/empresa/gerenciaEmpresa.php?codigo=$empresa->codigo';</script>"; 
        }
    }

?>
