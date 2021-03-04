<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    
    include("../../modelo/catsite/modeloCatSite.php");
    include("../../modelo/catsite/CatSite.php");  
    
    $variables  =   (strtolower($_SERVER['REQUEST_METHOD'])== 'GET') ? $_GET : $_POST;
    $catsite     =   new CatSite();
    foreach ($variables as $key => $value){
        $catsite->$key = $value;
    }

    $mp     = new ModeloCatSite();
    $submit = $_REQUEST["submit"];
    $res    = "";
    
    if($submit != NULL){
        if($submit == "Inserir"){
            $res = $mp->inserir($catsite);
        }else{
            if($submit == "Atualizar"){
                $res = $mp->atualizar($catsite);
            }else{
                if($submit == "Excluir"){
                    $res = $mp->excluir($catsite->codigo);
                }
            }
        }
        if($res != NULL && $res != ""){
            echo "<script>alert ('$res');</script>"; 
            echo "<script>location.href='/gerenciatarefa/visao/catsite/gerenciaCatSite.php';</script>"; 
        }else{
            echo "<script>alert ('$submit com exito categoria: $catsite->nome');</script>"; 
            echo "<script>location.href='/gerenciatarefa/visao/catsite/gerenciaCatSite.php?nome=$catsite->nome';</script>"; 
        }
    }

?>
