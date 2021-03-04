<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include("../../modelo/tipopessoa/modeloTipoPessoa.php");

    if(($codigo != NULL && $codigo != "") || ($nome != NULL && $nome != "")){
        $mp        = new ModeloTipoPessoa();
        if($codigo != NULL && $codigo != ""){
            $resultado = $mp->procuraCodigo($codigo);
        }
        if($nome != NULL && $nome != ""){
            $resultado = $mp->procuraNomeExata($nome);
        }
        if($resultado != NULL){
            $dados = mysql_fetch_array($resultado);
        }else{
             $dados = NULL;
        }
    }else{
        echo("<script>alert('Detalhes não podem ser exibidos sem parametro codigo');<script>");
    }

?>
