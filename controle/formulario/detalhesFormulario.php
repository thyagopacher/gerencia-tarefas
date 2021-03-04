<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include_once("../../modelo/formulario/modeloFormulario.php");

    if(($codigo != null && $codigo != "")){
        $mp        = new modeloFormulario();
        if($codigo != NULL && $codigo != ""){
            $resultado = $mp->procuraCodigo($codigo);
        }
        $dados_formulario = mysql_fetch_array($resultado);
    }else{
        echo("<script>alert('Detalhes não podem ser exibidos sem parametro codigo');<script>");
    }

?>
