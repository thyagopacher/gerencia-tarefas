<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    
    include("../../modelo/reuniao/modeloReuniao.php");
    include("../../modelo/reuniao/Reuniao.php");  
    
    $variables  =   (strtolower($_SERVER['REQUEST_METHOD'])== 'GET') ? $_GET : $_POST;
    $reuniao    =   new Reuniao();
    foreach ($variables as $key => $value){
        $reuniao->$key = $value;
    }

    $mp             = new ModeloReuniao();
    $submit         = $_REQUEST["submit"];
    $res            = "";
    
    if($submit != NULL){
        if($submit == "Inserir"){
            $res = $mp->inserirAgenda($reuniao);
        }else{
            if($submit == "Atualizar"){
                $res = $mp->atualizarAgenda($reuniao);
            }else{
                if($submit == "Excluir"){
                    $res = $mp->excluir($reuniao->codigo);
                }
            }
        }
        if($res != NULL && $res != ""){
            echo "<script>alert ('$res');</script>"; 
            echo "<script>location.href='/gerenciatarefa/visao/reuniao/agendaReuniao.php';</script>"; 
        }else{
            echo "<script>alert ('$submit com exito o reunião: $reuniao->nome');</script>"; 
            echo "<script>location.href='/gerenciatarefa/visao/reuniao/agendaReuniao.php?nome=$reuniao->nome';</script>"; 
        }
    }

?>
