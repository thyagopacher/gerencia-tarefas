<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
        include_once ("../../modelo/tipopessoa/modeloTipoPessoa.php");

        $mp         = new ModeloTipoPessoa();
        $resultado  = $mp->procuraTodos();
        $dados_tipo = NULL;
        if($resultado != NULL){
            $dados_tipo = $resultado;
        }else{
             echo("<script>alert('Sem tipo de pessoa');</script>");
        }
?>
