<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    
    include("../../modelo/compromisso/modeloCompromisso.php");
    include("../../modelo/compromisso/Compromisso.php");  
    
    $variables  =   (strtolower($_SERVER['REQUEST_METHOD'])== 'GET') ? $_GET : $_POST;
    $compromisso      =   new Compromisso();
    foreach ($variables as $key => $value){
        $compromisso->$key = $value;
    }

    $mp             = new ModeloCompromisso();
    $submit         = $_REQUEST["submit"];
    $res            = "";
    
    if($submit != NULL){
        if($submit == "Inserir"){
            $res = $mp->inserir($compromisso);
        }else{
            if($submit == "Atualizar"){
                $res = $mp->atualizar($compromisso);
            }else{
                if($submit == "Excluir"){
                    $res = $mp->excluir($compromisso->codigo);
                }
            }
        }
        if($res != NULL && $res != ""){
            echo "<script>alert ('$res');</script>"; 
            echo "<script>location.href='/gerenciatarefa/visao/compromisso/gerenciaCompromisso.php';</script>"; 
        }else{
            echo "<script>alert ('$submit com exito o compromisso: $compromisso->nome');</script>"; 
            echo "<script>location.href='/gerenciatarefa/visao/compromisso/gerenciaCompromisso.php?nome=$compromisso->nome';</script>"; 
        }
    }

?>
