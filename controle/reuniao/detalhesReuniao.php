<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include("../../modelo/reuniao/modeloReuniao.php");

    if(($codigo != NULL && $codigo != "")){
        $mp        = new ModeloReuniao();
        if($codigo != NULL && $codigo != ""){
            $resultado = $mp->procuraCodigo($codigo);
        }
    }else{
        echo("Detalhes não podem ser exibidos sem parametro codigo");
    }

?>
