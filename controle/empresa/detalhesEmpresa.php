<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include_once("../../modelo/empresa/modeloEmpresa.php");

    if(($codigo != null && $codigo != "")){
        $mp        = new ModeloEmpresa();
        if($codigo != NULL && $codigo != ""){
            $resultado = $mp->procuraCodigo($codigo);
        }
        $dados = mysql_fetch_array($resultado);
    }else{
        echo("<script>alert('Detalhes não podem ser exibidos sem parametro codigo');<script>");
    }

?>
