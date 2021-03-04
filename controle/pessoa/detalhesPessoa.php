<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include_once("../../modelo/pessoa/modeloPessoa.php");

    if(($codigo != null && $codigo != "") || (($login != null && $login != "") && ($senha != null && $senha != ""))){
        $mp        = new ModeloPessoa();
        if($codigo != NULL && $codigo != ""){
            $resultado = $mp->procuraCodigo($codigo);
        }else{
            $resultado = $mp->validaLogin($login, $senha);
        }
        $dados = mysql_fetch_array($resultado);
    }else{
        echo("<script>alert('Detalhes não podem ser exibidos sem parametro codigo');<script>");
    }

?>
