<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
        include_once("../../modelo/pessoa/modeloPessoa.php");
        $tipo            = $_REQUEST['tipo'];  
        $mp              = new ModeloPessoa();
        $resultado       = $mp->procuraTipo($tipo);
        $dados_pessoa    = NULL;
        if($resultado != NULL){
            $dados_pessoa = $resultado;
        }else{
             echo("<script>alert('Sem funcionários desse tipo de pessoa');</script>");
        }
?>
