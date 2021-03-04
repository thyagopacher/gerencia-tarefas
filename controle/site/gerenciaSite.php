<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    
    include("../../modelo/site/modeloSite.php");
    include("../../modelo/site/Site.php");  
    
    $variables  =   (strtolower($_SERVER['REQUEST_METHOD'])== 'GET') ? $_GET : $_POST;
    $site       =   new Site();
    foreach ($variables as $key => $value){
        $site->$key = $value;
    }

    $mp     = new ModeloSite();
    $submit = $_REQUEST["submit"];
    $res    = "";
    
    if($submit != NULL){
        if($submit == "Inserir"){
            $res = $mp->inserir($site);
        }else{
            if($submit == "Atualizar"){
                $res = $mp->atualizar($site);
            }else{
                if($submit == "Excluir"){
                    $res = $mp->excluir($site->codigo);
                }
            }
        }
        if($res != NULL && $res != ""){
            echo "<script>alert ('$res');</script>"; 
            echo "<script>location.href='/gerenciatarefa/visao/site/gerenciaSite.php';</script>"; 
        }else{
            echo "<script>alert ('$submit com exito');</script>"; 
            echo "<script>location.href='/gerenciatarefa/visao/site/gerenciaSite.php?codigo=$site->codigo';</script>"; 
        }
    }

?>
