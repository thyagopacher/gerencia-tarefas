<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include("../../modelo/compromisso/modeloCompromisso.php");

    if(($codigo != NULL && $codigo != "") || ($nome != NULL && $nome != "")){
        $mp        = new ModeloCompromisso();
        if($codigo != NULL && $codigo != ""){
            $resultado = $mp->procuraCodigo($codigo);
        }
        if($nome != NULL && $nome != ""){
            $resultado = $mp->procuraNomeExata($nome);
        }
        if($resultado != NULL){
            $dados = mysql_fetch_array($resultado);
        }
    }else{
        echo("Detalhes não podem ser exibidos sem parametro codigo");
    }

?>
