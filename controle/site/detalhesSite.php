<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include("../../modelo/site/modeloSite.php");

    if($codigo != null && $codigo != ""){
        $mp        = new ModeloSite();
        if($codigo != NULL && $codigo != ""){
            $resultado = $mp->procuraCodigo($codigo);
            $dados     = mysql_fetch_array($resultado);
        }else{
            echo("Parametro codigo em branco");
        }
    }else{
        echo("Detalhes não podem ser exibidos sem parametro codigo");
    }

?>
