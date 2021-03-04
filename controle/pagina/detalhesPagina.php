<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include("../../modelo/pagina/modeloPagina.php");

    if($codigo != null && $codigo != ""){
        $mp        = new ModeloPessoa();
        if($codigo != NULL && $codigo != ""){
            $resultado  = $mp->procuraCodigo($codigo);
            $dados      = mysql_fetch_array($resultado);
        }
    }else{
        echo("Detalhes não podem ser exibidos sem parametro codigo");
    }

?>
