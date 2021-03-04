<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    
    include("../../modelo/pagina/modeloPagina.php");
    include("../../modelo/pagina/Pagina.php");  
    
    $variables  =   (strtolower($_SERVER['REQUEST_METHOD'])== 'GET') ? $_GET : $_POST;
    $pagina     =   new Pagina();
    foreach ($variables as $key => $value){
        $pagina->$key = $value;
    }

    $mp     = new ModeloPagina();
    $submit = $_REQUEST["submit"];
    $res    = "";
    
    if($submit != NULL){
        if($submit == "Inserir"){
            $res = $mp->inserir($pagina);
        }else{
            if($submit == "Atualizar"){
                $res = $mp->atualizar($pagina);
            }else{
                if($submit == "Excluir"){
                    $res = $mp->excluir($pagina->codigo);
                }
            }
        }
        if($res != NULL && $res != ""){
            echo "<script>alert ('$res');</script>"; 
            echo "<script>location.href='/gerenciatarefa/visao/pagina/gerenciaPagina.php';</script>"; 
        }else{
            echo "<script>alert ('$submit com exito');</script>"; 
            echo "<script>location.href='/gerenciatarefa/visao/pagina/gerenciaPagina.php?codigo=$pagina->codigo';</script>"; 
        }
    }

?>
