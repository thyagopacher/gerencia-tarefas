<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include_once ("../../modelo/pessoa/modeloPessoa.php");

    $login = $_REQUEST["login"];
    $senha = $_REQUEST["senha"];
    
    $mp     = new ModeloPessoa();
    if($login != NULL && $senha != NULL){
        $data = mysql_fetch_array($mp->validaLogin($login, $senha));
        if($data != NULL && $data["nome"] != ""){
            echo("yes");
        }else{
            echo("no"); 
        }
    }
?>
